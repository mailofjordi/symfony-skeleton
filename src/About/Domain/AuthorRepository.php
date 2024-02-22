<?php

declare(strict_types=1);

namespace App\About\Domain;

interface AuthorRepository
{
    public function findAll(): array;
}
