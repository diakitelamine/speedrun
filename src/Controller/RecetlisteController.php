<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetlisteController extends AbstractController
{
    /**
     * @Route("/recetliste", name="recetliste")
     */
    public function index(): Response
    {
        return $this->render('recetliste/index.html.twig', [
            'controller_name' => 'RecetlisteController',
        ]);
    }
}
