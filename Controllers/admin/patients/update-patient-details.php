<?php

require 'Models/User.php';

$dataForUpdate = [
    'file' => $_POST['file']
];

(new User())->update( $_POST['id'], $dataForUpdate);

redirect("admin/patient-details?id={$_POST['id']}");    