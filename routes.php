<?php 

//admin-doctors
$router->get('/admin', 'Controllers/admin/homepage.php')->only('admin_doctor');
$router->get('/admin/calendar', 'Controllers/admin/calendar.php')->only('admin_doctor');
$router->get('/admin/patients', 'Controllers/admin/patients.php')->only('admin_doctor');


//admin-user
$router->get('/user-profile', 'Controllers/profile.php')->only('user');

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