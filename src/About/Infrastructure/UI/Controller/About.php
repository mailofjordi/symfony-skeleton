<?php

declare(strict_types=1);

namespace App\About\Infrastructure\UI\Controller;

use App\About\Domain\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class About extends AbstractController
{
    #[Route('/about', name: 'about')]
    public function about(AuthorRepository $authorRepository): Response
    {
        $authors = $authorRepository->findAll();

        $authorsData = [];
        foreach ($authors as $author) {
            $authorsData[] = [
                "name" => $author->getName(),
            ];
        }

        return new JsonResponse(
            ['authors' => $authorsData],
            Response::HTTP_OK
        );
    }
}
