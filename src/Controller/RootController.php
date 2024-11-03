<?php

namespace App\Controller;

use App\Kernel;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

Symfony\Component\HttpKernel\Kernel;

class RootController
{

    #[Route('/')]
    public function start(): Response
    {
        return new JsonResponse([
            'hello' => 'Symfony',
            'version' => Kernel::VERSION,
        ]);
    }
}
