<?php
namespace App\Routes;

use App\Controllers\User;
use App\Controllers\Admin;

$app->get('/admin', Admin::class . ':home');

$app->get('/admin/users', Admin::class . ':showUsers');

$app->get('/admin/users/create', Admin::class . ':showCreateUser');

$app->post('/admin/users/create', User::class . ':insert');

$app->get('/admin/users/{id}', Admin::class . ':showUpdateUser');

$app->post('/admin/users/{id}', User::class . ':update');

$app->get('/admin/users/{id}/delete', User::class . ':delete');

