<?php

namespace App\Controller;

use App\Entity\Programe;
use App\Form\ProgrameType;
use App\Repository\ProgrameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/programe")
 */
class ProgrameController extends AbstractController
{
    /**
     * @Route("/", name="programe_index", methods={"GET"})
     */
    public function index(ProgrameRepository $programeRepository): Response
    {
        return $this->render('programe/index.html.twig', [
            'programes' => $programeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="programe_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $programe = new Programe();
        $form = $this->createForm(ProgrameType::class, $programe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($programe);
            $entityManager->flush();

            return $this->redirectToRoute('programe_index');
        }

        return $this->render('programe/new.html.twig', [
            'programe' => $programe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="programe_show", methods={"GET"})
     */
    public function show(Programe $programe): Response
    {
        return $this->render('programe/show.html.twig', [
            'programe' => $programe,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="programe_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Programe $programe): Response
    {
        $form = $this->createForm(ProgrameType::class, $programe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('programe_index');
        }

        return $this->render('programe/edit.html.twig', [
            'programe' => $programe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="programe_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Programe $programe): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programe->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($programe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('programe_index');
    }
}
