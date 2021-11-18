<?php

namespace App\EventSubscriber\Hasura;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Hasura\EventDispatcher\TableEvent;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

final class WelcomeUserRegisteredSubscriber implements EventSubscriberInterface
{
    private string $appName;

    private string $emailSender;

    public function __construct(ParameterBagInterface $bag, private MailerInterface $mailer)
    {
        $this->appName = $bag->get('app.name');
        $this->emailSender = $bag->get('app.email_sender');
    }

    public static function getSubscribedEvents()
    {
        return [
            TableEvent::class => 'onTableEvent',
        ];
    }

    public function onTableEvent(TableEvent $event)
    {
        if ($event->getTriggerName() !== 'user_registered') {
            return;
        }

        # Discovery payload: https://hasura.io/docs/latest/graphql/core/event-triggers/payload.html#json-payload
        $event = $event->getEvent();
        $eventData = $event['data']['new'];

        $welcomeEmail = new Email();
        $welcomeEmail->from($this->emailSender);
        $welcomeEmail->to($eventData['email']);
        $welcomeEmail->subject($this->appName);
        $welcomeEmail->html(sprintf('<h1>Hi %s, welcome to %s</h1>', $eventData['name'], $this->appName));

        $this->mailer->send($welcomeEmail);
    }
}
