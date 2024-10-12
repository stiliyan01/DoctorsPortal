<?php

// require('functions.php');



$doctoralSpecialties = [
    ['id' => 1, 'name' => 'Cardiologist'],
    ['id' => 2, 'name' => 'Neurologist'],
    ['id' => 3, 'name' => 'Pediatrician'],
];
if($_SERVER['REQUEST_METHOD'] === 'POST') {
   dd($_POST);
}

// $db->query("SELECT * FROM doctors")->all();

require ('views/register.php');