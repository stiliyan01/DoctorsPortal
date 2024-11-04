<?php

require_once './Middleware/Auth.php';
require_once './Middleware/Guest.php';
require_once './Middleware/AdminDoctor.php';


class Middleware{
    const MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class,
        'admin_doctor' => AdminDoctor::class,
    ];

    public static function resolve($key)
    {
        if (!$key) {
            return;
        }
        $middleware = static::MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("No matching middleware found for key '{$key}'.");
        }
        (new $middleware)->handle();
    }
}