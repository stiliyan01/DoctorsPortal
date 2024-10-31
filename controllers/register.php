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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'gender' => $_POST['gender']
    ];


    if (isset($_POST['is_doctor'])) {
        $data['title'] = $_POST['title'];
        $data['speciality_id'] = $_POST['specialty'];
        $data['city_id'] = $_POST['city'];


        $doctorModel->create($data);
    } else {
        $userModel->create($data);
    }
    header('Location: /login');
}


view('register', ['doctoralSpecialties' => $doctoralSpecialties, 'cities' => $cities]);