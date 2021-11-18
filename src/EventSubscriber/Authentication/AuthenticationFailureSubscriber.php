<?php

declare(strict_types=1);

namespace App\EventSubscriber\Authentication;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Events;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

final class AuthenticationFailureSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            Events::AUTHENTICATION_FAILURE => ['onAuthenticationFailure', -8]
        ];
    }

    public function onAuthenticationFailure(AuthenticationFailureEvent $event): void
    {
        $response = $event->getResponse();

        if ($response instanceof JWTAuthenticationFailureResponse) {
            // Set response compatible with Hasura action.
            // https://hasura.io/docs/latest/graphql/core/actions/action-handlers.html#returning-an-error-response
            $event->setResponse(
                new JsonResponse(
                    [
                        'extensions' => [
                            'category' => 'security'
                        ],
                        'message' => $response->getMessage()
                    ],
                    401
                )
            );
        }
    }
}