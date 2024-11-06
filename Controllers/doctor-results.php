<?php

require './Models/Doctor.php';

$doctors = (new Doctor())->searchDoctors(requestParams());  
    
view('doctors-results', ['doctors' => $doctors]);