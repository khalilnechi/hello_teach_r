<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CoursesController extends AbstractController
{
    /**
     * @Route("/Cours", name="courses")
     */
    public function index()
    {
        return $this->render('courses/index.html.twig', [
            'controller_name' => 'CoursesController',
            'tab' => $table_courses
        ]);
    }
}
