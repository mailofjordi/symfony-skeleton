<?php

declare(strict_types=1);

namespace App\About\Application\GetAuthors;

use App\Shared\Domain\Bus\Query\Response;

final readonly class GetAuthorsResponse implements Response
{
    /**
    * @param array<int<0, max>, array{name: string}> $authors
     */
    public function __construct(private array $authors)
    {
    }

    /**
    * @return array<int<0, max>, array{name: string}>
     */
    public function getAuthors(): array
    {
        return $this->authors;
    }
}
