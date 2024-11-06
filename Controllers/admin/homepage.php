<?php 
require 'Models/DoctorSpecialty.php';
require 'Models/Doctor.php';

$doctor_id = $_SESSION['user']['user']['id'];
$doctor = new Doctor();
$doctor = $doctor->find($doctor_id);

$specialties = new DoctorSpecialty();
$specialties = $specialties->all();


view('admin/homepage', ['doctor' => $doctor, 'specialties' => $specialties]);