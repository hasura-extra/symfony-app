<?php
/*
 * (c) Minh Vuong <vuongxuongminh@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace App\EventSubscriber;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Events;
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
        // Set response compatible with Hasura action.
        $event->setResponse(
            new JsonResponse(
                [
                    'extensions' => [
                        'category' => 'security'
                    ],
                    'message' => 'Invalid credentials.'
                ],
                401
            )
        );
    }
}