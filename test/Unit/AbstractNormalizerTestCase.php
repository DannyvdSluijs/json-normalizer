<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/json-normalizer
 */

namespace Localheinz\Json\Normalizer\Test\Unit;

use Localheinz\Json\Normalizer\NormalizerInterface;
use Localheinz\Test\Util\Helper;
use PHPUnit\Framework;

/**
 * @internal
 */
abstract class AbstractNormalizerTestCase extends Framework\TestCase
{
    use Helper;

    final public function testImplementsNormalizerInterface(): void
    {
        self::assertClassImplementsInterface(NormalizerInterface::class, $this->className());
    }

    final protected function className(): string
    {
        $className = \preg_replace(
            '/Test$/',
            '',
            \str_replace(
                'Localheinz\\Json\\Normalizer\\Test\\Unit\\',
                'Localheinz\\Json\\Normalizer\\',
                static::class
            )
        );

        if (!\is_string($className)) {
            throw new \RuntimeException(\sprintf(
                'Unable to deduce source class name from test class name "%s".',
                static::class
            ));
        }

        return $className;
    }
}
