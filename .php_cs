<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers([
        'no_useless_return', // There should not be an empty return statement at the end of a function.
        'newline_after_open_tag', // Ensure there is no code on the same line as the PHP open tag.
        'ordered_use', // Ordering use statements.
        'php4_constructor', // Convert PHP4-style constructors to __construct. Warning! This could change code behavior.
        'phpdoc_order', // Annotations in phpdocs should be ordered so that param annotations come first, then throws annotations, then return annotations.
        'short_array_syntax', // PHP arrays should use the PHP 5.4 short-syntax.
        'strict', // Comparison should be strict.
        'strict_param',
    ])
    ->finder($finder)
;
