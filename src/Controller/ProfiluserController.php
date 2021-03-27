<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfiluserController extends AbstractController
{
    /**
     * @Route("/profiluser", name="profiluser")
     */
    public function index(): Response
    {
        return $this->render('profiluser/index.html.twig', [
            'controller_name' => 'ProfiluserController',
        ]);
    }
}
