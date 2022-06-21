<?php

class Application
{
    function __construct()
    {
        Auth::start();
        Route::loadRoutes();
    }

    function handle()
    {
        Request::isEmpty();

        $url = Request::getCurrentRoute();

        $c = Route::searchRoute($url);

        if (!$c) Errors::page404();

        Route::setCurrentRoute($c['controller']['url']);

        if (is_callable($c['controller']['action'])) return $c['controller']['action']();

        $file = 'Controllers/' . $c['controller']['action'][0] . '.php';

        if (is_file($file)) {
            require_once $file;

            $controller = new $c['controller']['action'][0];

            return $controller->{$c['controller']['action'][1]}($c['params']);
        }
    }
}