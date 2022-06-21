<?php

if (!function_exists('alert')) {
    function alert($data)
    {
        foreach (array_keys($data) as $e) {
            $message[$e] = $data[$e];
        }

        return require 'views/templates/messages.php';
    }
}

if (!function_exists('asset')) {
    function asset($path)
    {
        return constant('URL') . "public/" . $path;
    }
}

if (!function_exists('format')) {
    function format($string)
    {
        $string = utf8_decode($string);
        $string = htmlspecialchars($string);

        return $string;
    }
}

if (!function_exists('name')) {
    function name($name, $route)
    {
        $string = utf8_decode($name);
        $string = htmlspecialchars($string);

        return false;
    }
}

if (!function_exists('redirect')) {
    function redirect($URI, $messages = array())
    {

        $location = constant('URL') . rtrim($URI, "/");

        header("Location: " . $location);
        exit;
    }
}

if (!function_exists('route')) {
    function route($route, $data = [])
    {
        return constant('URL') . $route;
    }
}

if (!function_exists('view')) {
    function view($name, $data = [])
    {
        foreach (array_keys($data) as $e) {
            ${$e} = $data[$e];
        }

        return include 'views/layouts/app.php';
    }
}