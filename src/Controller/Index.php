<?php

namespace App\Controller;

use App\Manager\StuffManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Index extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(Request $request, StuffManager $stuffManager): Response
    {
        $form = $this->createFormBuilder()
            ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $stuffManager->doStuff();
            $this->addFlash('success', 'Mail envoyé');

            return $this->redirectToRoute('app_index');
        }

        return $this->render('index.html.twig', ['form' => $form->createView()]);
    }
}