<?php
return [
    'Settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        // Renderer Settings
        'renderer' => [
            'template_path' => __DIR__ . '/../../templates/',
        ],
        // Renderer Settings
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'database',
            'username' => 'root',
            'password' => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
        // Monolog Settings
        'logger' => [
            'name' => 'slim-App',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../../logs/App.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
