<?php

require 'Models/Doctors.php';

	$doctorModel = new Doctor($config['database']);
	dd($doctorModel->find(1));
    
view('doctors');