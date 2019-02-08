<?php

namespace App\Controller;

use App\Entity\Size;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(Request $request)
    {
        $product = $this->getDoctrine()
                        ->getRepository(Product::class)
                        ->findAll();
        $session=$request->getSession();
        if (!$session->has('panier')) $session->set('panier',array());
        $qte_items=(array_sum($session->get('panier')));
        if (!$session->has('qte_items')) $session->set('qte_items',array());
        $qte=$session->get('qte_items');
        $qte[0]=$qte_items;
        $session->set('qte_items',$qte);
       
        return $this->render('panier/index.html.twig', [
            'products' => $product,
            'panier' => $session->get('panier')
        ]);
    }
    /**
     * @Route("/ajouterPanier/{id}", name="ajouterPanier")
     */
    public function ajouterPanierAction($id, Request $request)
    {
        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
        $size_index=$request->query->get('size_index');
        $size_select=$request->query->get('size_select');
        if (array_key_exists($id, $panier)) {
            if (array_key_exists($size_index, $panier[$id])) 
                // if ($request->query->get('qte') != null ) 
                // $panier[$id][$size_select] = $request->query->get('qte');
                // else 
                $panier[$id][$size_index]++;  
            else 
            {
                $panier[$id][$size_index]=1;
            }
        }else{
            $panier[$id][$size_index]=1;
        }
        $session->set('panier',$panier);
        $qte_items=0;
            foreach($panier as $value){
                foreach($value as $value1){
                $qte_items += $value1;
                }  
            }
        $session->set('qte_items', $qte_items);
        
        $referer = $request->headers->get('referer');
        return $this->redirect($referer);
    }
    /**
     * @Route("/modifyPanier/{id}", name="modifyPanier")
     */
    public function modifyPanierAction($id, Request $request)
    {
        $productStock = $this->getDoctrine()
                        ->getRepository(Size::class)
                        ->findOneBy(['productStock'=>$id]);
        $product = $this->getDoctrine()
                        ->getRepository(Product::class)
                        ->find($id);
        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
        if (!$session->has('size')) $session->set('size',array());
        $size_panier=$request->query->get('size_panier');
        switch ($size_panier) {
            case 's':
                $size_stock=$productStock->getS();
                break;
            case 'm':
                $size_stock=$productStock->getM();
                break;
            case 'l':
                $size_stock=$productStock->getL();
                break;
            case 'xl':
                $size_stock=$productStock->getXl();  
            break;
        }
        //dump($size_stock);
            if ($request->query->get('qte') != null ) 
            $panier[$id][$size_panier] = $request->query->get('qte');
                if ($panier[$id][$size_panier]>$size_stock) {
                    if($size_stock<1){
                        $text="There isn't any ".$product->getName()." in size ".$size_panier." in the stock!!!!!! ";
                    }
                    elseif ($size_stock<2) {
                        $text="There is ".$size_stock." ".$product->getName()." in size ".$size_panier." in the stock!!!!!! ";
                    } 
                    
                    else {
                        $text="There are ".$size_stock." ".$product->getName()." in size ".$size_panier." in the stock!!!!!! ";
                    }
                    
                    $this -> addFlash(
                        'danger',
                        $text
                    );
                } else {
                    $session->set('panier',$panier);
                    $qte_items=0;
                    foreach($panier as $value){
                        foreach($value as $value1){
                        $qte_items += $value1;
                        }
                    }  
                    $session->set('qte_items',$qte_items);
                }
        $referer = $request->headers->get('referer');
        return $this->redirect($referer);
        // return $this->render('/panier/showPanier.html.twig', [
            
        // ]);
    }

    /**
     * @Route("/showPanier", name="showPanier")
     */
    public function showPanierAction(Request $request)
    {
        $session=$request->getSession();
        $panier = $session->get('panier');
        if (!$session->has('panier')) $session->set('panier',array());
        $products=array();
        foreach(array_keys($session->get('panier')) as $prod){
           $products[]=$this->getDoctrine()
                ->getRepository(Product::class)
                ->find($prod);

        }
        return $this->render('/panier/showPanier.html.twig', [
            'products' => $products,
            'panier' => $panier
        ]);

    }
    /**
     * @Route("/checkout", name="order_checkout")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function checkoutAction(Request $request)
    {
        $session = $request->getSession();
        $panier = $session->get('panier');

        if (!$session->has('panier')) $session->set('panier',array());
        $qte_items=(array_sum($session->get('panier')));
        $products=array();
        foreach(array_keys($session->get('panier')) as $prod){
            $products[]=$this->getDoctrine()
                ->getRepository(Product::class)
                ->find($prod);
           // dump($prod);
        }
        // foreach(array_values($panier) as $nbr){
        // $total = $nbr * $prod;
        //     dump($total);

        // }


        if($request->isMethod('POST')){
         //   $token = $request->request->get('stripeToken');
           // dump($token);
            $this->emptyPanierAction($request);
            $this->addFlash('success', 'Order Complete! Yay!');
            return $this->redirectToRoute('home');
        }

        return $this->render('panier/checkout.html.twig', array(
            'products' => $products,
            'panier' => $panier,
            'qte_items'=> $qte_items,
        ));
    }

    public function totalPanier(Request $request)
    {
        $session = $request->getSession();
        $panier = $session->get('panier');

        if (!$session->has('panier')) $session->set('panier',array());
        $qte_items=(array_sum($session->get('panier')));
        $products=array();
        foreach(array_keys($session->get('panier')) as $prod){
            $products[]=$this->getDoctrine()
                ->getRepository(Product::class)
                ->find($prod);
        }
        foreach(array_values($panier) as $nbr){


    }
    }

     /**
     * @Route("/emptyPanier", name="emptyPanier")
     */
    public function emptyPanierAction(Request $request)
    {
        $session=$request->getSession();
        $session->remove('panier');
        $session->remove('qte_items');
        $session->clear();
        return $this->redirect($this->generateUrl('showPanier'));
    }
    /**
     * @Route("/supprimerPanier/{id}", name="supprimerPanier")
     */
    public function supprimerPanierAction(Request $request, $id)
    {
        $size_delete = $request->get('size_delete');
        $session = $request->getSession();
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier))
        {
            unset($panier[$id][$size_delete]);
            $session->set('panier',$panier);
            $qte_items=0;
            foreach($panier as $value){
                foreach($value as $value1){
                $qte_items += $value1;
                }  
            }
            $session->set('qte_items',$qte_items);
        }
        $referer = $request->headers->get('referer');
        return $this->redirect($referer);
    }


}
