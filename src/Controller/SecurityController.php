<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AccountType;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * Controller to login on the website.
     *
     *
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**

     * permet d'afficher la page Account/profile de l'utilisateur pour modifier ses infos
     * @Route("/profile", name="profile")
     *
     *@Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')")
     * @return Response
     */

    public function profile(Request $request, UserPasswordEncoderInterface $passwordEncoder, ObjectManager $manager)

    {
        $user = $this->getUser();

        $form = $this->createForm(AccountType::class, $user);

       // $em= $this->getDoctrine()->getRepository(User::class);

        $form->handleRequest($request);

        if($form->isSubmitted()){

            $manager->persist($user);

            $manager->flush();

            $this -> addFlash(
                'success',
                "You have succesfully updated your profile !"
            );
        }

        return $this->render('user/profile.html.twig', [

            'form' => $form->createView(),

            'user' => $user

        ]);
    }
}
