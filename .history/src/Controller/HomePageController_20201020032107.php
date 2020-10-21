<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Database;
use Kreait\Firebase\Symfony\Bundle\FirebaseBundle;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
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
        echo "%env(FIREBASE_CREDENTIALS)%"
        $factory=new Factory();
        $database = $factory->withServiceAccount('%env(FIREBASE_CREDENTIALS)%')->createDatabase();
        $reference = $database->getReference('/');
        //$postRef = $database->getReference('/Cours')->push("123");
        echo $reference->getSnapshot();
        //$snapshot = $reference->getSnapshot();
        //echo $snapshot->getValue();;
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
        //return new Response("<html><body>hello</body></html>",Response::HTTP_OK);
    }
}