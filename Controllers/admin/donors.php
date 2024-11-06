<?php 


require 'Models/User.php';

$donors = (new User())->donors();

view('admin/donors', ['donors' => $donors]);