<?php

declare(strict_types=1);

namespace WebServCo\JSONAPI\DataTransfer\Document;

use WebServCo\JSONAPI\Contract\Document\JsonapiInterface;

final readonly class Jsonapi implements JsonapiInterface
{
    public function __construct(public string $version = '1.1')
    {
    }
}
