<?php

namespace App\Controller;

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

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
