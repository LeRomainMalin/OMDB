<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrangeController extends AbstractController
{
    /**
     * @Route("/", name="orange")
     */
    public function index()
    {
        return $this->render('orange/index.html.twig', [
            'controller_name' => 'OrangeController',
        ]);
    }
}
