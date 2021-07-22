<?php

require "../bootstrap.php";

use app\classes\Uri;
use app\classes\Routes;

$routes = [

    '/' => 'controllers/index.php',

];

$uri = Uri::uri();
require Routes::load($routes, $uri);
