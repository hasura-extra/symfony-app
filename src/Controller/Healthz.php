<?php

declare(strict_types=1);


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/*
 * Health check support for Docker & Kubernetes liveness probe, readiness probe.
 */
final class Healthz
{
    #[Route(path: '/healthz')]
    public function __invoke(): Response
    {
        return new Response('OK', 200);
    }
}