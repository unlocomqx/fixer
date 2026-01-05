<?php

$config = new PrestaShop\CodingStandards\CsFixer\Config();

$config->setRules(array_merge($config->getRules(), [
    'trailing_comma_in_multiline' => [
        'elements' => ['arrays', 'array_destructuring', 'match'],
    ],
]));

/** @var \Symfony\Component\Finder\Finder $finder */
$finder = $config->setUsingCache(true)->getFinder();
$finder->in(__DIR__)->exclude('vendor');

return $config;
