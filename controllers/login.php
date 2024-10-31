<?php

require('Models/User.php');
require('Models/Doctor.php');

$usersModel= new User($config['database']);
$doctorModel = new Doctor($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    dd($doctorModel->login($_POST));
}



view('login');