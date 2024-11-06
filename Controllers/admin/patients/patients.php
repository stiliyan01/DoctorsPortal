<?php 
require 'Models/Doctor.php';
require 'Models/User.php';


$patientsAll = (new Doctor())->patients($_SESSION['user']['user']['id']);

$patentsMappedToUsers = [];

foreach($patientsAll as $patient){
    $patentsMappedToUsers[] = (new User())->find($patient['user_id']);
}

view('admin/patients/patients', ['patients' => $patentsMappedToUsers]);