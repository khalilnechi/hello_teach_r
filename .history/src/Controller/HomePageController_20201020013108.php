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
        $firebase = new \Firebase\FirebaseLib('https://helloteachrfirebase.firebaseio.com/', 'AIzaSyDlN3yuZaAofUCj3PTvh-Kgaa5v6FJv53c');
        $name = $firebase->get("https://helloteachrfirebase.firebaseio.com/Cours");
        var_dump($name);
        echo $name;
        $firebase->set("https://helloteachrfirebase.firebaseio.com/Cours", "5");
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
        //return new Response("<html><body>hello</body></html>",Response::HTTP_OK);
    }
}
