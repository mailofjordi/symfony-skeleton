<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Persistence\Doctrine;

use App\Shared\Domain\Uuid;
use Doctrine\DBAL\Types\StringType;

abstract class UuidType extends StringType
{
    abstract protected function getPhpValueFromString(string $value): Uuid;

    abstract protected function getTypeName(): string;

    public function getName(): string
    {
        return $this->getTypeName();
    }

    final public function convertToDatabaseValue($value, $platform): ?string
    {
        if (null === $value) {
            return null;
        }

        return parent::convertToDatabaseValue($value->toString(), $platform);
    }

    public function convertToPHPValue($value, $platform): Uuid
    {
        return $this->getPhpValueFromString($value);
    }
}
