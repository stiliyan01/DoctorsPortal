<?php

require 'Models/Appointment.php';    

$appointment = new Appointment();

$referer = $_SERVER['HTTP_REFERER'] ?? '';
$parsed = parse_url($referer);

parse_str($parsed['query'], $queryArray);

header('Content-Type: application/json');
echo json_encode($appointment->getByDoctorId($queryArray['doctor_id']));