<?php


require('Models/User.php');
require('Models/Doctor.php');

$userModel = new User();
$doctorModel = new Doctor();

$doctor = $doctorModel->login($_POST);
$user = $userModel->login($_POST);

$logged = [
    'is_doctor' => $doctor ? true : false,
    'is_user' => $user ? true : false,
    'user' => $doctor ? $doctor : ($user ? $user : null)
];

if (($doctor || $user) === false) {
    return view('login');
}

$_SESSION['user'] = $logged;

return redirect($_SESSION['last_location_before_login']);
    