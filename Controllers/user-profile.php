<?php

require 'Models/User.php';

$user = (new User())->find($_SESSION['user']['user']['id']);  

view('user-profile', ['user' => $user]);