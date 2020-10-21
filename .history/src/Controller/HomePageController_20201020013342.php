<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
class HomePageController extends AbstractController
{
    

    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
        //echo "hello";
        $database = app('firebase.database');

        $reference = $database->getReference('path/to/child/location');

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
        //return new Response("<html><body>hello</body></html>",Response::HTTP_OK);
    }
}
