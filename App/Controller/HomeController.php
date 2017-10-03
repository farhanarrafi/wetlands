<?php
namespace App\Controller;

use Slim\Router;
use Slim\Views\PhpRenderer;
use Interop\Container\ContainerInterface;

/**
 * Class HomeController
 * @package Controller
 */
class HomeController {

    protected $view;
    protected $router;

    /**
     * HomeController constructor.
     * @param ContainerInterface $container receives container instance
     * @param PhpRenderer $view
     */
    public function __construct(PhpRenderer $view, Router $router) {
        $this->view = $view;
        $this->router = $router;
    }

    public function index($request, $response, $args) {
        $args['page'] = 'index';
        return $this->view->render($response, 'index.phtml', $args);
    }
}