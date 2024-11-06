<?php 

require 'Models/DoctorSpecialty.php';
require 'Models/Doctor.php';


$doctor_id = $_POST['id'];
$doctor = new Doctor();
$doctor = $doctor->find($doctor_id);

$dataForUpdate = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'speciality_id' => $_POST['options']
];

(new Doctor())->update($doctor_id, $dataForUpdate);

redirect('admin');