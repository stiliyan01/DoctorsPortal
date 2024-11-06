<?php

require_once './Core/Middleware.php';

class AdminDoctor extends Middleware
{
    public function handle(){
        if(!isset($_SESSION['user'])){
            header('location: /login');
            exit();
        }
        
        if ($_SESSION['user']['is_doctor'] === false) {
            header('location: /');
            exit();
        }
    }
}