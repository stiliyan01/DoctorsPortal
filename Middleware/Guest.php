<?php

require_once './Core/Middleware.php';

class Guest extends Middleware
{
    public function handle(){
        if ($_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }
}