<?php
namespace App\Traits;

use Exception;
use Slim\Views\Twig;

trait Template
{    
    public function getView($pathView)
    {
        try {

            $twig = Twig::create($pathView);

            return $twig;

        } catch (Exception $e) {

            var_dump($e->getMessage());
        
        }
    }

    public function setView($name)
    {        
        return $name . EXT_VIEWS;   
    
    }
}