<?php

declare(strict_types=1);

namespace App\About\Application\GetAuthors;

use App\Shared\Domain\Bus\Query\Response;

final readonly class GetAuthorsResponse implements Response
{

    public function __construct(private array $authors)
    {
    }

    public function getAuthors(): array
    {
        return $this->authors;
    }
}
