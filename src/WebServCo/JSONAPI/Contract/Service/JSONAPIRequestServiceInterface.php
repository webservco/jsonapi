<?php

declare(strict_types=1);

namespace WebServCo\JSONAPI\Contract\Service;

use Psr\Http\Message\ServerRequestInterface;

interface JSONAPIRequestServiceInterface
{
    public function contentTypeMatches(ServerRequestInterface $request): bool;

    public function getContentTypeHeaderValue(ServerRequestInterface $request): string;

    /** @phpcs:disable SlevomatCodingStandard.TypeHints.DisallowMixedTypeHint.DisallowedMixedTypeHint */

    /**
     * Parse request body and return it as an array.
     *
     * @return array<mixed>
     */
    public function getRequestBodyAsArray(ServerRequestInterface $request): array;

    /**
     * @param array<mixed> $requestBodyAsArray
     */
    public function validateVersion(array $requestBodyAsArray, float $expectedVersion = 1.1): bool;

    /** @phpcs: enable */
}
