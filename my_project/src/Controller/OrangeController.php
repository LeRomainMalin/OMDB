<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/recherche", name="Recherche")
     */
    public function query(Request $request)
    {
        dump($request->query->get('inputTitle'));
            return $this->redirectToRoute(
                'film',
                array('query'=>$request->query->get('inputTitle'))
            );
    }



}
