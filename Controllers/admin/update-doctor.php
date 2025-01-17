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

$v = new Validator($dataForUpdate);

$v->field('title')->required()->min_len(3)->max_len(50);
$v->field('first_name')->required()->min_len(3)->max_len(50);
$v->field('last_name')->required()->min_len(3)->max_len(50);
$v->field('email')->required()->email();
$v->field('password')->required()->min_len(6)->max_len(50);
$v->field('gender')->required();
$v->field('speciality_id')->required();
$v->field('city_id')->required();

if(!$v->is_valid()){
    return view('admin/homepage', [
    'errors' => 'Please fill all the fields correctly',
    'doctor'=>$doctor]);
}

(new Doctor())->update($doctor_id, $dataForUpdate);

redirect('admin');