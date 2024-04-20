<?php

declare(strict_types=1);

namespace WebServCo\JSONAPI\Contract\Document;

use WebServCo\Data\Contract\Transfer\DataTransferInterface;

interface JSONAPIInterface extends DataTransferInterface
{
    public const MEDIA_TYPE = 'application/vnd.api+json';
}
