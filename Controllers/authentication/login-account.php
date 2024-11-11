<?php


require('Models/User.php');
require('Models/Doctor.php');


$doctor = (new Doctor())->login($_POST);
$user = (new User())->login($_POST);

$logged = [
    'is_doctor' => $doctor ? true : false,
    'is_user' => $user ? true : false,
    'user' => $doctor ? $doctor : ($user ? $user : null)
];

if (($doctor || $user) === false) {
    return view('login');
}

$_SESSION['user'] = $logged;

if($doctor){
    return redirect('admin');
}else{
    return redirect($_SESSION['last_location_before_login']); 
}
    