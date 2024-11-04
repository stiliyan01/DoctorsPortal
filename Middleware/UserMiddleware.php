<?php

require_once './Core/Middleware.php';

class UserMiddleware extends Middleware
{
    public function handle(){
        if ($_SESSION['user']['is_user'] === false) {
            header('location: /');
            exit();
        }
    }
}