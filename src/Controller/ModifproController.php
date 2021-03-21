<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifproController extends AbstractController
{
    /**
     * @Route("/modifpro", name="modifpro")
     */
    public function index(): Response
    {
        return $this->render('modifpro/index.html.twig', [
            'controller_name' => 'ModifproController',
        ]);
    }
}
