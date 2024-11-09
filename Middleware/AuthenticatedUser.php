<?php
require_once './Core/Middleware.php';

class AuthenticatedUser
{
    public function handle()
    {
        if (!$_SESSION['user']) {
            redirect('login');
        }
    }
}
