<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
use Kreait\Firebase\Symfony\Bundle\FirebaseBundle;
use Kreait\Firebase\Factory;

class HomePageController extends AbstractController
{

    

    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
        //echo "hello";
       // $d=new Database();
       // $serv=new MyService();
        //$n=firebase.database();
        $database = (new Factory())->createDatabase();
        $reference = $database->getReference('/');
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
        //return new Response("<html><body>hello</body></html>",Response::HTTP_OK);
    }
}