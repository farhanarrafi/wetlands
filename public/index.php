<?php
use Slim\Http\Request;
use Slim\Http\Response;

require __DIR__ . '/../vendor/autoload.php';

// Instantiate the App
$settings = require __DIR__ . '/../App/Settings/settings.php';
$app = new Slim\App($settings);

// Set up Dependency
require __DIR__ . '/../App/Dependency/dependencies.php';

// Register Middleware
require __DIR__ . '/../App/Middleware/middleware.php';

// Register Routes
require __DIR__ . '/../App/Routes/routes.php';

// Run the App
$app->run();
?>
