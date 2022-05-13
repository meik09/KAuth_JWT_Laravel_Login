<?php

namespace KAuthJWT\LaravelLogin;

use Illuminate\Routing\Controller;

class SimpleLogin extends Controller
{
    public static function login()
    {
        return 'login successful.';
    }
}