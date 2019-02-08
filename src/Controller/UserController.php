<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ResetPasswordType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/user")
 *
 */
class UserController extends AbstractController
{
    /**
     * Admin Controller to show all the user of the website.
     *
     *
     * @Route("/", name="user_index", methods={"GET"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * Admin Controller to create a new User.
     *
     *
     * @Route("/new", name="user_new", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Admin Controller to show an user by his "id".
     *
     *
     * @Route("/{id}", name="user_show", methods={"GET"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * Admin Controller to edit an user by his "id"
     *
     *
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function edit(Request $request, User $user): Response
    {

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index', [
                'id' => $user->getId(),
            ]);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Controller to delete an user by his id.
     *
     *
     * @Route("/delete/{id}", name="user_delete", methods={"DELETE","GET"})
     */
    public function delete(Request $request, User $user, $id): Response
    {
        //  $user = $this->getUser();
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $usrRepo= $entityManager->getRepository(User::class);
                $user = $usrRepo->find($id);
            $entityManager->remove($user);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_register');
    }

    // /**
    //  * unsubscribe user
    //  * @Route("/unsubscribe", name="user_unsubscribe")
    //  * @param Request $request
    //  * @param User $user
    //  */
    // public function unsubscribe(Request $request, User $user): Response{
    //     $user = $this->getUser();
    //     if ($this->isCsrfTokenValid('delete'.$user, $request->request->get('_token'))) {
    //         $entityManager = $this->getDoctrine()->getManager();
    //         $entityManager->remove($user);
    //         $entityManager->flush();
    //     }

    //     return $this->redirectToRoute('home');
    // }

    /**
     * @Route("/resetpassword", name="user_resetPass", methods={"GET","POST"})
     */
    public function resetPassword(Request $request, User $user, UserPasswordEncoderInterface $passwordEncoder,ObjectManager $entitymanager ): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ResetPasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('Password')->getData()
                ));
            $entitymanager->persist($user);
            $entitymanager->flush();
          //  return $this->redirectToRoute('profile', [
         //       'id' => $user->getId(),

        }

        return $this->render('user/resetPassword.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

}
