<?php
use Slim\Http\Request;
use Slim\Http\Response;

require __DIR__ . '/../vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/../app/settings/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/../app/dependencies/dependencies.php';

// Register middleware
require __DIR__ . '/../app/middleware/middleware.php';

// Register routes
require __DIR__ . '/../app/routes/routes.php';

// Run the app
$app->run();
?>
