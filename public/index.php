<?php

require "../bootstrap.php";

use app\classes\Layout;
use app\classes\Uri;
use app\classes\Routes;

$routes = [

    '/' => 'controllers/index.php',
    '/create_user' => 'controllers/create_user.php',
    '/user_store' => 'controllers/user_store.php',

];

$uri = Uri::uri();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');
