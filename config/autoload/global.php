<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'db' => [
        'driver' => 'Pdo',
        'dsn' => 'mysql:host=localhost;port=3306;dbname=auth',
        'user' => 'root',
        'password' => '1245',
    ],

    'db_doctrine' => [
        'driver' => 'pdo_mysql',
        'dbname' => 'auth',
        'host' => 'localhost',
        'port' => '3306',
        'user' => 'root',
        'password' => '1245',
    ]
];
