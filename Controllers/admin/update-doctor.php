<?php 

require 'Models/DoctorSpecialty.php';
require 'Models/Doctor.php';



$doctor_id = $_POST['id'];

$doctor = (new Doctor())->find($doctor_id);

$dataForUpdate = [
    'title' => $_POST['title'],
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'gender' => $_POST['gender'],
    'speciality_id' => $_POST['speciality_id'],
    'city_id' => $_POST['city_id'],
];

(new Doctor())->update($doctor_id, $dataForUpdate);

redirect('admin');