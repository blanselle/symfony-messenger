<?php

namespace App\Manager;

use App\Services\Mailer;
use Symfony\Component\Mime\Email;

class StuffManager
{
    private $mailer;
    
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function doStuff() 
    {
        $email = (new Email())
            ->from('hello@example.com')
            ->to('you@example.com')
            ->subject('Time for Symfony Mailer!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $this->mailer->sendEmail($email);
    }
}