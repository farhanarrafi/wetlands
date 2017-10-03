<?php

namespace App\Controller;

use Slim\Router;
use Slim\Views\PhpRenderer;
use Interop\Container\ContainerInterface;

/**
 * Class InsertController
 * @package Controller
 */
class InsertController {

    protected $view;
    protected $router;

    /**
     * InsertController constructor.
     * @param ContainerInterface $container receives container instance
     * @param PhpRenderer $view
     */
    public function __construct(PhpRenderer $view, Router $router) {
        $this->view = $view;
        $this->router = $router;
    }

    public function index($request, $response, $args) {
        $args['page'] = 'insert';
        return $this->view->render($response, 'insert.phtml', $args);
    }
}
