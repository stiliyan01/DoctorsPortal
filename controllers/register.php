<?php

require('Models/User.php');
require('Models/Doctor.php');
require('Models/DoctorSpecialties.php');

$userModel= new User($config['database']);
$doctorModel= new Doctor($config['database']);
$doctorSpecialtiesModel= new DoctorSpecialties($config['database']);

$doctoralSpecialties = $doctorSpecialtiesModel->all();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   dd($_POST);
}

view('register',['doctoralSpecialties' => $doctoralSpecialties]);