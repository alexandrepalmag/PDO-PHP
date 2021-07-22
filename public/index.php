<?php

require "../bootstrap.php";

use app\classes\Uri;

$routes = [

    '/' => 'controllers/index.php',

];

$uri = Uri::load();
