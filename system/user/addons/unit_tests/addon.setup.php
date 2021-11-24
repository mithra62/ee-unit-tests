<?php

if (defined('PATH_THIRD')) {
    require_once PATH_THIRD . 'unit_tests/vendor/autoload.php';
}

return [
    'author'            => 'mithra62',
    'author_url'        => '',
    'name'              => 'unit_tests',
    'description'       => 'Allows the running of PHPUnit within ExpressionEngine',
    'version'           => '0.0.1',
    'namespace'         => 'Mithra62\UnitTests',
    'settings_exist'    => false,
    // Advanced settings

    'commands' => [
        'tests:run' => Mithra62\UnitTests\Commands\Tests::class
    ],
    'tests' => [
        'path' => 'src/Tests'
    ]
];
