<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * Controller to render the homepage.
     *
     *
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('home/home.html.twig');
    }

    /**
     * Controller to render "Our Story" page.
     *
     * 
     * @Route("/ourStory", name="ourStory")
     */
    public function ourStory(){

        return $this->render('home/ourStory.html.twig');
    }

    /**
     * Controller to render "About".
     *
     *
     * @Route("/about", name="about")
     */
    public function about(){

        return $this->render('home/about.html.twig');
    }

    /**
     * Controller to render "Contant" page.
     *
     *
     * @Route("/contact", name="contact")
     */
    public function contact(){

        return $this->render('home/contact.html.twig');
    }
}
