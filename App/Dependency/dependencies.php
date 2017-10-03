<?php
// DIC configuration
$container = $app->getContainer();
// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('Settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};
// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('Settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};
/**
 * This is the service declaration for using Eloquent ORM.
 * @param $container
 * @return \Illuminate\Database\Capsule\Manager
 */
$container['db'] = function ($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
    return $capsule;
};

$container['HomeController'] = function ($c) {
    $view = $c['renderer'];
    //$db = $c['db'];
    $router = $c['router'];
    return new App\Controller\HomeController($view,$router);
};

$container['InsertController'] = function ($c) {
    $view = $c['renderer'];
    //$db = $c['db'];
    $router = $c['router'];
    return new App\Controller\InsertController($view,$router);
};

$container['AboutController'] = function ($c) {
    $view = $c['renderer'];
    //$db = $c['db'];
    $router = $c['router'];
    return new App\Controller\AboutController($view,$router);
};


