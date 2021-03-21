<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailproController extends AbstractController
{
    /**
     * @Route("/detailpro", name="detailpro")
     */
    public function index(): Response
    {
        return $this->render('detailpro/index.html.twig', [
            'controller_name' => 'DetailproController',
        ]);
    }
}
