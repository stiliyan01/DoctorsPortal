<?php 

//admin-doctors
$router->get('/admin', 'controllers/admin/homepage.php');
$router->get('/admin/calendar', 'controllers/admin/calendar.php');  
$router->get('/admin/patients', 'controllers/admin/patients.php');  

//login
$router->get('/login', 'controllers/login.php');
$router->post('/login-account', 'controllers/login.php');


//register
$router->get('/register', 'controllers/register.php');
$router->post('/register-account', 'controllers/register.php');


//user
$router->get('/', 'controllers/homepage.php');
$router->get('/doctors', 'controllers/doctors.php');