<?php 

require 'Models/Doctor.php';
require 'Models/Appointment.php';

$doctor = $_SESSION['user']['user'];

$appointments = (new Appointment())->getByDoctorId($doctor['id']);

view('admin/calendar', ['appointments' => $appointments]);