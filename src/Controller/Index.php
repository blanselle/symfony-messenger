<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class Index extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createFormBuilder()
            ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = (new Email())
                ->from('hello@example.com')
                ->to('you@example.com')
                ->subject('Time for Symfony Mailer!')
                ->html('<p>See Twig integration for better HTML integration!</p>');
            
            $mailer->send($email);
            $this->addFlash('success', 'Mail envoyé');

            return $this->redirectToRoute('app_index');
        }

        return $this->render('index.html.twig', ['form' => $form->createView()]);
    }
}