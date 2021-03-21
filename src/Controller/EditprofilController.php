<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditprofilController extends AbstractController
{
    /**
     * @Route("/editprofil", name="editprofil")
     */
    public function index(): Response
    {
        return $this->render('editprofil/index.html.twig', [
            'controller_name' => 'EditprofilController',
        ]);
    }
}
