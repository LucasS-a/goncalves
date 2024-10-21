<?php

namespace App\Controllers;

use App\Controllers\Base;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Site extends Base
{
    public function home(Request $request, Response $response, $args)
    {
        $view = $this->getView(DIR_VIEWS_SITE)->render($response, 'home.html.twig');

        return $response;
    }
}