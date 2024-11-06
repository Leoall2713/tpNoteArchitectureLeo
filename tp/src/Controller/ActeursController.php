<?php

namespace App\Controller;

use App\Entity\Acteurs;
use App\Form\ActeursType;
use App\Repository\ActeursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/acteurs')]
final class ActeursController extends AbstractController
{
    #[Route(name: 'app_acteurs_index', methods: ['GET'])]
    public function index(ActeursRepository $acteursRepository): Response
    {
        return $this->render('acteurs/index.html.twig', [
            'acteurs' => $acteursRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_acteurs_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $acteur = new Acteurs();
        $form = $this->createForm(ActeursType::class, $acteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($acteur);
            $entityManager->flush();

            return $this->redirectToRoute('app_acteurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('acteurs/new.html.twig', [
            'acteur' => $acteur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_acteurs_show', methods: ['GET'])]
    public function show(Acteurs $acteur): Response
    {
        return $this->render('acteurs/show.html.twig', [
            'acteur' => $acteur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_acteurs_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Acteurs $acteur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActeursType::class, $acteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_acteurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('acteurs/edit.html.twig', [
            'acteur' => $acteur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_acteurs_delete', methods: ['POST'])]
    public function delete(Request $request, Acteurs $acteur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$acteur->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($acteur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_acteurs_index', [], Response::HTTP_SEE_OTHER);
    }
}
