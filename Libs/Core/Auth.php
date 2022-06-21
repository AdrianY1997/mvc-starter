<?php

class Auth
{
    static function start()
    {
        session_start();
    }

    static function stop()
    {
        session_destroy();
    }

    static function login($user)
    {
        self::start();
        $_SESSION['user'] = $user;
    }

    static function check()
    {
        if (isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }

    static function get()
    {
        $user = new User();
        $data = $user->getAll(['user' => $_SESSION['user']])[0];

        return $data;
    }
}