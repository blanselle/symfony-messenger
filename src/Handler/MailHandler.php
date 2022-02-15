<?php

namespace App\Handler;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use App\Message\MailMessage;

class MailHandler implements MessageHandlerInterface
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(MailMessage $mailMessage)
    {
        $this->mailer->send($mailMessage->getEmail());
    }
}