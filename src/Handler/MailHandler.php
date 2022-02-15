<?php

namespace App\Handler;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use App\Message\Mail;

class MailHandler implements MessageHandlerInterface
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(Mail $mail)
    {
        $this->mailer->send($mail->getEmail());
    }
}