<?php 

require 'Models/User.php';

$user = (new User())->find(requestParams()['id']);

view('admin/patient-details', ['user' => $user]);