<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Profil1Controller extends AbstractController
{
    /**
     * @Route("/profil1", name="profil1")
     */
    public function index(): Response
    {
        return $this->render('profil1/index.html.twig', [
            'controller_name' => 'Profil1Controller',
        ]);
    }
}
