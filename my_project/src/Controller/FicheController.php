<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FicheController extends AbstractController
{
    /**
     * @Route("/fiche/{produit}", name="fiche")
     */
    public function fiche($produit)
        {
            $apiKey = '7712a22';
            //$query = "American";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?i=' . $produit . '&apiKey=' . $apiKey);
            curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);

            $resultat = curl_exec($ch);

            $json =json_decode ($resultat);

            return $this->render('fiche/index.html.twig',
                array(
                    'produit' => 'valeur1',
                    'movies' => $json,
                ));
        }

}
