<?php

require_once './Middleware/UserMiddleware.php';
require_once './Middleware/Guest.php';
require_once './Middleware/AdminDoctor.php';


class Middleware{
    const MAP = [
        'user' => UserMiddleware::class,
        'guest' => Guest::class,
        'admin_doctor' => AdminDoctor::class,
        'putLastUrl' => PutLastUrl::class
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