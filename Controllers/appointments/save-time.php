<?php

require './Models/Doctor.php';

$doctor = (new Doctor())->find(requestParams()['doctor_id']);

return view('save-time', ['doctor' => $doctor]);