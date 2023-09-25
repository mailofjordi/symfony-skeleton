<?php

declare(strict_types=1);

namespace App\About\Infrastructure\UI\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class About
{
    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return new JsonResponse([
            "name" => "Jordi Martínez",
        ]);
    }
}
