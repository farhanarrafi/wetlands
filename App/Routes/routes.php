<?php
use Slim\Http\Request;
use Slim\Http\Response;

// Routes
/*$app->get('/', function (Request $request, Response $response, array $args) {
    $args['page'] = 'index';
    return $this->renderer->render($response, 'index.phtml', $args);
});*/

$app->get('/', 'HomeController:index');
$app->get('/insert', 'InsertController:index');
$app->get('/about', 'AboutController:index');
