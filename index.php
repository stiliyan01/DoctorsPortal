<?php


require 'Core/functions.php';
require 'Core/Database.php';
// require 'Core/router.php';

session_start();
	
	// Add values to the session.
	$_SESSION['item_name'] = 'value'; // string
	// $_SESSION['item_name'] = 0; // int
	// $_SESSION['item_name'] = 0.0; // float

	// Get session values.
	$value = $_SESSION['item_name'];

    dd($_SESSION);