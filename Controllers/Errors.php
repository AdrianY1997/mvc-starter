<?php

class Errors
{
    static function page404()
    {
        return view('templates/error', [
            'code' => '404',
            'message' => 'Page not found<br>The page you are looking for does not exist'
        ]);
    }
}