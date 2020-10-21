<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    

    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
        //echo "hello";
        $firebase = new \Firebase\FirebaseLib('https://helloteachrfirebase.firebaseio.com/', 'MqL0c8tKCtheLSYcygYNtGhU8Z2hULOFs9OKPdEp');
        $name = $firebase->get("/Cours" . '/1');
        var_dump($name);
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
        //return new Response("<html><body>hello</body></html>",Response::HTTP_OK);
    }
}
