<?php

require 'Models/User.php';

$user = (new User())->find($_SESSION['user']['user']['id']);  

$dataForUpdate = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'gender' => $_POST['gender']
];


(new User())->update($user['id'], $dataForUpdate);

redirect('user-profile');