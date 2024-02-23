<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Bus\Messenger\Query;

use App\Shared\Domain\Bus\Query\Query;
use App\Shared\Domain\Bus\Query\QueryBus;
use App\Shared\Domain\Bus\Query\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

class MessengerQueryBus implements QueryBus
{
    use HandleTrait;

    public function __construct(private MessageBusInterface $messageBus)
    {}

    public function ask(Query $query): ?Response
    {
        return $this->handle($query);
    }
}
