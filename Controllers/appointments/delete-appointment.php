<?php
require('Models/Appointment.php');

$appointment = (new Appointment())->find($_POST['appointment_id']);

(new Appointment())->delete($appointment['id']);

return redirect('appointments');