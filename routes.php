<?php 

//admin-doctors
$router->get('/admin', 'Controllers/admin/homepage.php');
$router->get('/admin/calendar', 'Controllers/admin/calendar.php');
$router->get('/admin/patients', 'Controllers/admin/patients.php');

//login
$router->get('/login', 'Controllers/login.php')->only('pesho');
$router->post('/login-account', 'Controllers/login.php');


//register
$router->get('/register', 'Controllers/register.php')->only('goshko');
$router->post('/register-account', 'Controllers/register.php');


//user
$router->get('/', 'Controllers/homepage.php');
$router->get('/doctors', 'Controllers/doctors.php');