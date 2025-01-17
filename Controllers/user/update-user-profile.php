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

$v = new Validator($dataForUpdate);

$v->field('first_name')->required()->min_len(3)->max_len(50);
$v->field('last_name')->required()->min_len(3)->max_len(50);
$v->field('email')->required()->email();
$v->field('password')->required()->min_len(6)->max_len(50);
$v->field('gender')->required();

if(!$v->is_valid()){
    return view('user-profile', [
       
    'errors' => 'Моля попълнете всички полета правилно',
    'user'=>$user]);
}


(new User())->update($user['id'], $dataForUpdate);

redirect('user-profile');