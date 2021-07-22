<?php

namespace app\classes;

use FFI\Exception;

class Routes
{

    public static function load($routes, $uri)
    {

        if (!array_key_exists($uri, $routes)) {

            throw new Exception("This route does not exist {$uri}");
        }

        return "../app/{$routes[$uri]}";
    }
}
