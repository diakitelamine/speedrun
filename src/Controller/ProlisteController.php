<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProlisteController extends AbstractController
{
    /**
     * @Route("/proliste", name="proliste")
     */
    public function index(): Response
    {
        return $this->render('proliste/index.html.twig', [
            'controller_name' => 'ProlisteController',
        ]);
    }
}
