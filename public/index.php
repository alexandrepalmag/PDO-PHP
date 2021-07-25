<?php

require "../bootstrap.php";

use app\classes\Layout;
use app\classes\Uri;
use app\classes\Routes;

$routes = [

    '/' => 'controllers/index.php',
    '/create_user' => 'controllers/create_user.php',
    '/user_store' => 'controllers/user_store.php',
    '/user_edit' => 'controllers/user_edit.php',
    '/user_update' => 'controllers/user_update.php',

];

$uri = Uri::uri();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');
