<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/homePage", name="home_page")
     */
    public function index()
    {
       /* return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);*/
        return new Response("hello",200);
    }
}