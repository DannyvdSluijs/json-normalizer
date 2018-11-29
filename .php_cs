<?php

use Localheinz\PhpCsFixer\Config;

$header = <<<EOF
Copyright (c) 2018 Andreas Möller

For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

@see https://github.com/localheinz/json-normalizer
EOF;

$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php71($header), [
    'mb_str_functions' => false,
    'no_unset_on_property' => false,
    'static_lambda' => false,
]);

$config->getFinder()->in(__DIR__);

$cacheDir = \getenv('TRAVIS') ? \getenv('HOME') . '/.php-cs-fixer' : __DIR__;

$config->setCacheFile($cacheDir . '/.php_cs.cache');

return $config;
