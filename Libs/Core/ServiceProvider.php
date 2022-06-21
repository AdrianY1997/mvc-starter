<?php

class ServiceProvider
{
    static function load()
    {
        self::config();
        self::core();
        self::error();
        self::routes();
    }

    static function config()
    {
        require_once 'Config/Database.php';
        require_once 'Config/Site.php';
    }

    static function core()
    {
        require_once 'Libs/Core/Auth.php';
        require_once 'Libs/Core/Helper.php';
        require_once 'Libs/Core/Request.php';
        require_once 'Libs/Core/Route.php';
    }

    static function error()
    {
        require_once 'Controllers/Errors.php';
    }

    static function getRoutes()
    {
        return Route::$routes;
    }

    static function routes()
    {
        require_once 'Routes/web.php';
    }
}