<?php 

require 'Models/DoctorSpecialty.php';
require 'Models/Doctor.php';


$doctor_id = $_POST['id'];
$doctor = new Doctor();
$doctor = $doctor->find($doctor_id);

$dataForUpdate = [
    'title' => $_POST['title'],
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'gender' => $_POST['gender']
];

(new Doctor())->update($doctor_id, $dataForUpdate);

redirect('admin');