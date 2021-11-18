<?php

declare(strict_types=1);

namespace App\Security;

use App\Entity\User;
use Hasura\AuthHook\SessionVariableEnhancerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Symfony\Component\Security\Core\Security;

final class AuthenticatedSessionVariableEnhancer implements SessionVariableEnhancerInterface
{
    public function __construct(private Security $security)
    {
    }

    public function enhance(array $sessionVariables, ServerRequestInterface $request): array
    {
        /** @var User $user */
        if ($user = $this->security->getUser()) {
            $sessionVariables['x-hasura-user-id'] = (string)$user->getId();
        }

        return $sessionVariables;
    }
}