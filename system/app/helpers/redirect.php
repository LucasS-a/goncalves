<?php
namespace App\helpers;

use Psr\Http\Message\ResponseInterface as Response;

function redirect(Response $response, $to, $status = 302):Response 
{
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withHeader('Location', $to)
        ->withStatus($status);
}