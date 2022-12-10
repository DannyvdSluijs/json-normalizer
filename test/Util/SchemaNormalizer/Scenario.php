<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018-2022 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/json-normalizer
 */

namespace Ergebnis\Json\Normalizer\Test\Util\SchemaNormalizer;

/**
 * @internal
 *
 * @psalm-immutable
 */
final class Scenario
{
    private function __construct(
        private string $expected,
        private string $json,
        private string $schemaUri,
    ) {
    }

    public static function create(
        string $expected,
        string $json,
        string $schemaUri,
    ): self {
        return new self(
            $expected,
            $json,
            $schemaUri,
        );
    }

    public function expected(): string
    {
        return $this->expected;
    }

    public function json(): string
    {
        return $this->json;
    }

    public function schemaUri(): string
    {
        return $this->schemaUri;
    }
}
