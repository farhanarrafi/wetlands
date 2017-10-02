<?php
use Slim\Http\Request;
use Slim\Http\Response;
// Routes
$app->get('/', function (Request $request, Response $response, array $args) {
    $args['page'] = 'index';
    return $this->renderer->render($response, 'index.phtml', $args);
});
$app->get('/insert', function (Request $request, Response $response, array $args) {
    $args['page'] = 'insert';
    return $this->renderer->render($response, 'insert.phtml', $args);
});
$app->get('/about', function (Request $request, Response $response, array $args) {
    $args['page'] = 'about';
    return $this->renderer->render($response, 'about.phtml', $args);
});
