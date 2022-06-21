<?php

class Route
{
    static string $currentRoute = "";
    static array $routes = [];

    static function create($URI, array|callable $action = null)
    {
        array_push(Route::$routes, ['url' => $URI, 'action' => $action]);
    }

    static function getCurrentRoute()
    {
        return self::$currentRoute;
    }

    static function loadRoutes()
    {
        self::$routes = ServiceProvider::getRoutes();
    }

    static function searchRoute($url)
    {
        $array = null;
        $params = null;

        foreach (self::$routes as $route) {
            if (str_contains($url, $route['url'])) {
                $params = trim(explode($route['url'], $url)[1], "/");
                $array = $route;
            }
        }

        if ($array) {
            return ['controller' => $array, 'params' => $params];
        }

        return false;
    }

    static function setCurrentRoute($route)
    {
        self::$currentRoute = $route;
    }
}