<?php 

require 'Models/User.php';

$user = (new User())->find(requestParams()['id']);

view('admin/patients/patient-details', ['user' => $user]);