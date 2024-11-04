<?php

require('Models/User.php');
require('Models/Doctor.php');

$userModel= new User();
$doctorModel = new Doctor();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $doctor = $doctorModel->login($_POST);
    $user = $userModel->login($_POST);

    $logged = [
        'is_doctor' => $doctor ? true : false,
        'is_user' => $user ? true : false,
        'user' => $doctor ? $doctor : ($user ? $user : null)
    ];

    if(($doctor || $user) === false ){
       return view('login');
    }

    $_SESSION['logged'] = $logged;

    if($doctor){
        return redirect('admin');
    }else{
        return redirect('');
    }
}

view('login');