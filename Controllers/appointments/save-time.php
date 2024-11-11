<?php

require './Models/Doctor.php';

$doctor = (new Doctor())->find(requestParams()['doctor_id']);
$user = $_SESSION['user']['user'];

return view('save-time', ['doctor' => $doctor, 'user' => $user]);