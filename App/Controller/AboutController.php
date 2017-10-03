<?php
/**
 * Created by PhpStorm.
 * User: bjit
 * Date: 10/3/17
 * Time: 12:29 PM
 */

namespace App\Controller;

use Slim\Router;
use Slim\Views\PhpRenderer;
use Interop\Container\ContainerInterface;

class AboutController
{
    protected $view;
    protected $router;

    /**
     * AboutController constructor.
     * @param ContainerInterface $container receives container instance
     * @param PhpRenderer $view
     */
    public function __construct(PhpRenderer $view, Router $router) {
        $this->view = $view;
        $this->router = $router;
    }

    public function index($request, $response, $args) {
        $args['page'] = 'about';
        return $this->view->render($response, 'about.phtml', $args);
    }
}