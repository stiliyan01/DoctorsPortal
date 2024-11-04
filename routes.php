<?php 

//admin-doctors
$router->get('/admin', 'Controllers/admin/homepage.view.php');
$router->get('/admin/calendar', 'Controllers/admin/calendar.php');
$router->get('/admin/patients', 'Controllers/admin/patients.php');

//login
$router->get('/login', 'Controllers/login.php')->only('guest');
$router->post('/login-account', 'Controllers/login.php');


//register
$router->get('/register', 'Controllers/register.php')->only('guest');
$router->post('/register-account', 'Controllers/register.php');


//logout
$router->delete('/logout', 'Controllers/logout.php');


//user
$router->get('/', 'Controllers/homepage.php');
$router->get('/doctors', 'Controllers/doctor.php');