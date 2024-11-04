<?php

require_once './Core/Middleware.php';

class Auth extends Middleware
{
    public function handle(){
        if (! $_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }
}