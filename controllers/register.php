<?php

require('Models/User.php');
require('Models/Doctor.php');
require('Models/DoctorSpecialties.php');
require('Models/Cities.php');

$userModel = new User($config['database']);
$doctorModel = new Doctor($config['database']);
$doctorSpecialtiesModel = new DoctorSpecialties($config['database']);
$citiesModel = new Cities($config['database']);

$doctoralSpecialties = $doctorSpecialtiesModel->all();
$cities = $citiesModel->all();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   dd($_POST);
}

view('register',['doctoralSpecialties' => $doctoralSpecialties, 'cities' => $cities]);