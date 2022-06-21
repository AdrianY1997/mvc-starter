<?php

class Request
{
    static function getCurrentRoute()
    {
        return $_SERVER['REQUEST_URI'];
    }

    static function isEmpty()
    {
        if ($_SERVER['REQUEST_URI'] == "/") redirect(constant('HOME'));
    }
}