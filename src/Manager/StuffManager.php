<?php

namespace App\Manager;

use App\Services\Mailer;

class StuffManager
{
    private $mailer;
    
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function doStuff() 
    {
        $this->mailer->sendEmail(
            'hello@example.com',
            'you@example.com',
            'Time for Symfony Mailer!',
            '<p>See Twig integration for better HTML integration!</p>'
        );
    }
}