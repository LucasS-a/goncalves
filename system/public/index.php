<?php

require_once('../vendor/autoload.php');

use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Add Error Handling Middleware
$app->addErrorMiddleware(true, false, false);

// My first Route

require '../app/Routes/site.php';
require '../app/Routes/admin.php';

$app->run();