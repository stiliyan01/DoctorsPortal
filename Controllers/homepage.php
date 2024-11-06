<?php
require('./Models/Doctor.php');
require('./Models/DoctorSpecialty.php');
require('./Models/City.php');

$doctors = new Doctor();
$doctorsSpecialties = new DoctorSpecialty();
$cities = new City();

view('homepage', [
    'doctors' => $doctors->all(),
    'doctorsSpecialties' => $doctorsSpecialties->all(),
    'cities' => $cities->all(),
]);