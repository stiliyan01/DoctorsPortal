<?php 

//admin-doctors
$router->get('/admin', 'Controllers/admin/homepage.php')->only('admin_doctor');
$router->get('/admin/calendar', 'Controllers/admin/calendar.php')->only('admin_doctor');
$router->get('/admin/patients', 'Controllers/admin/patients/patients.php')->only('admin_doctor');
$router->get('/admin/patient-details', 'Controllers/admin/patients/patient-details.php')->only('admin_doctor');
$router->get('/admin/donors', 'Controllers/admin/donors.php')->only('admin_doctor');

$router->put('/admin/update-patient-details', 'Controllers/admin/patients/update-patient-details.php')->only('admin_doctor');


$router->put('/admin/update-doctor', 'Controllers/admin/update-doctor.php')->only('admin_doctor');


//admin-user
$router->get('/user-profile', 'Controllers/user/user-profile.php')->only('user');
$router->put('/update-user-profile', 'Controllers/user/update-user-profile.php')->only('user');

//login
$router->get('/login', 'Controllers/login.php')->only('guest');
$router->post('/login-account', 'Controllers/login-account.php')->only('guest');


//register
$router->get('/register', 'Controllers/register.php')->only('guest');
$router->post('/register-account', 'Controllers/register.php');


//logout
$router->delete('/logout', 'Controllers/logout.php');


//user
$router->get('/', 'Controllers/homepage.php');
$router->get('/doctors', 'Controllers/doctor-results.php');
$router->get('/save-time', 'Controllers/save-time.php');
$router->post('/save-time-to-db', 'Controllers/save-time-to-db.php')->only('user');