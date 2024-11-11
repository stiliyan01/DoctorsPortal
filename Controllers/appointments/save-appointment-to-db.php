<?php
require('Models/Appointment.php');

$date = $_POST['date'];

$dateObject = DateTime::createFromFormat('D M d Y H:i:s e+', $date);
$formattedDate = $dateObject->format('Y-m-d H:i:s');

$dataForDB=[
    'time'=>$formattedDate,
    'user_id'=>$_SESSION['user']['user']['id'],
    'doctor_id'=>$_POST['doctor_id'],
    'description'=>$_POST['description']
];

(new Appointment())->create($dataForDB);

return redirect('appointments');