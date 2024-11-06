<?php

require 'Models/User.php';

$dataForUpdate = [
    'file' => $_POST['file'],
    'is_donor' => $_POST['is_donor'],
];

(new User())->update( $_POST['id'], $dataForUpdate);

redirect("admin/patient-details?id={$_POST['id']}");    