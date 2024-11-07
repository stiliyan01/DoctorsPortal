<?php

require_once './Core/Middleware.php';

class UserMiddleware extends Middleware
{
    public function handle(){
        if (!isset($_SESSION['user'])) {
           redirect('login');
        }

        if( $_SESSION['user']['is_user'] === false){
            redirect('login');
        }
    }
}