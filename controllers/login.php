<?php

require('Models/User.php');

$usersModel= new User($config['database']);
// dd($usersModel->all());

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   dd($_POST);
}



view('login');