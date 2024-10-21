<?php
namespace App\Routes;

use App\Controllers\Site;

// My first Route
$app->get('/', Site::class . ':home');

