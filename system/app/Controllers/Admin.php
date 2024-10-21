<?php

namespace App\Controllers;

use Slim\Views\Twig;
use App\DB\Models\User;


class Admin extends Base
{
    private $user;

    public function __construct()
    {        
        $this->user = new User;
    }

    public function home($request, $response)
    {
        $this->getView(DIR_VIEWS_ADMIN)->render($response, $this->setView('home'));

        return $response;
    }

    public function showUsers($request, $response)
    {
        $users = $this->user->findAll();

        $this->getView(DIR_VIEWS_ADMIN)->render($response, $this->setView('users'), [
            'users' => $users
        ]);
        
        return $response;

    }

    public function showUpdateUser($request, $response, $args)
    {
        $user = $this->user->findBy('id', $args['id']);

        $this->getView(DIR_VIEWS_ADMIN)->render($response, $this->setView('users-update'), [
            'user' => $user
        ]);

        return $response;
    }

    public function showCreateUser($request, $response, $args)
    {
        $this->getView(DIR_VIEWS_ADMIN)->render($response, $this->setView('users-create'));

        return $response;
    }
}