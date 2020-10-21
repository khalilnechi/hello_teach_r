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
        $factory = new Factory();
        $database = $factory->withServiceAccount("../helloteachrfirebase-firebase-adminsdk-fhmb6-f45b618038.json")->createDatabase();
        $snapshot = $database->getReference('/Cours')->getSnapshot();
        //$postRef = $database->getReference('/Cours')->push("123");
        //echo $reference->getSnapshot();
        $table_courses = $snapshot->getValue();
        //var_dump($table_courses['c1']);
        foreach($table_courses as $key => $val){
           // var_dump($val);
            echo "\n".$val['Titre'];
        }
    
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
        //return new Response("<html><body>hello</body></html>",Response::HTTP_OK);
    }
}
