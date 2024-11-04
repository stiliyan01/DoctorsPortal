<?php

require 'Models/Doctors.php';

	$doctorModel = new Doctor();
	dd($doctorModel->find(1));
    
view('doctors');