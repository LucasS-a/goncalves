<?php

namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class AdminControllers{

    public function home(Request $request, Response $response, $args)
    {
        $view = Twig::fromRequest($request);

        return $view->render($response, 'admin/home.html.twig');
    }

    public function ShowUsers(Request $request, Response $response, $args)
    {
        
    }
}