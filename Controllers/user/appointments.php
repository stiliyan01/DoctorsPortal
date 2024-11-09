<?php

require 'Models/User.php';
require 'Models/Appointment.php';

$user = (new User())->find($_SESSION['user']['user']['id']);



$appointments = (new User())->appointments($user['id']);

view('appointments', ['appointments' => $appointments]);