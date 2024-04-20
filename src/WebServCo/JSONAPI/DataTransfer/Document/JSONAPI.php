<?php

declare(strict_types=1);

namespace WebServCo\JSONAPI\DataTransfer\Document;

use WebServCo\JSONAPI\Contract\Document\JSONAPIInterface;

final readonly class JSONAPI implements JSONAPIInterface
{
    public function __construct(public string $version = '1.1')
    {
    }
}
