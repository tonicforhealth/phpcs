#!/usr/bin/php
<?php

$binary = realpath(sprintf('%s/../vendor/bin/php-cs-fixer', __DIR__));

$configs = [
    '--level' => 'symfony',
    '--fixers' => '-phpdoc_to_comment,-phpdoc_var_without_name,-phpdoc_short_description,-empty_return',
];

foreach ($configs as $name => $value) {
    $_SERVER['argv'][] = sprintf('%s=%s', $name, $value);
}

require_once $binary;