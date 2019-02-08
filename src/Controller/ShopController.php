<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShopController extends AbstractController
{
    /**
     * Controller to show all the shop.
     *
     * 
     * @Route("/show", name="shop")
     */
    public function showShop(ProductRepository $repo)
    {

        $products = $repo->findAll();

        return $this->render('shop/shop.html.twig', [
            'controller name' => 'ShopController',
            'products' => $products
        ]);
    }
    /**
     * Controller to show the products by category.
     *
     * 
     * @Route("/show/product/{category_id}", name="show_category")
     */
    public function showCategory(CategoryRepository $repo, $category_id){
        $productByCategory = $repo->find($category_id);

        return $this->render('shop/showCategory.html.twig', [
            'productByCategory' => $productByCategory->getProducts()
        ]);
    }
    
    /**
     * Controller to show an product with his custom resume of it.
     *
     *
     * @Route("/show/{id}", name="show_one")
     */
    public function showOne(ProductRepository $repo, $id){
    
        $product = $repo->find($id);

        return $this->render('shop/showOne.html.twig', [
            'product' => $product
        ]);
    }

}
