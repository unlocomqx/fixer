<?php

$config = new PhpCsFixer\Config('PrestaShop coding standard');
$config->setRiskyAllowed(true);

$config->setRules([
    '@Symfony' => true,
    'concat_space' => ['spacing' => 'one'],
    'cast_spaces' => ['space' => 'single'],
    'error_suppression' => ['mute_deprecation_error' => false, 'noise_remaining_usages' => false, 'noise_remaining_usages_exclude' => []],
    'function_to_constant' => false,
    'visibility_required' => ['elements' => ['property', 'method']],
    'no_alias_functions' => false,
    'phpdoc_summary' => false,
    'phpdoc_align' => ['align' => 'left'],
    'protected_to_private' => false,
    'psr_autoloading' => false,
    'self_accessor' => false,
    'yoda_style' => false,
    'non_printable_character' => true,
    'no_superfluous_phpdoc_tags' => false,
    'trailing_comma_in_multiline' => ['elements' => ['arrays', 'array_destructuring', 'match']],
]);

/** @var \Symfony\Component\Finder\Finder $finder */
$finder = $config->setUsingCache(true)->getFinder();
$finder->in(__DIR__)->exclude('vendor');

return $config;
