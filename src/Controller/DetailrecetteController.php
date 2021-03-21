<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailrecetteController extends AbstractController
{
    /**
     * @Route("/detailrecette", name="detailrecette")
     */
    public function index(): Response
    {
        return $this->render('detailrecette/index.html.twig', [
            'controller_name' => 'DetailrecetteController',
        ]);
    }
}
