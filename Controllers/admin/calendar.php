<?php 

require 'Models/Doctor.php';
$doctor = $_SESSION['user']['user'];

$appointments = (new Doctor())->appointments($doctor['id']);



view('admin/calendar', ['appointments' => $appointments]);