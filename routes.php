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
$router->get('/login', 'Controllers/authentication/login.php')->only('guest');
$router->post('/login-account', 'Controllers/authentication/login-account.php')->only('guest');


//register
$router->get('/register', 'Controllers/authentication/register.php')->only('guest');
$router->post('/register-account', 'Controllers/authentication/register.php')->only('guest');


//logout
$router->delete('/logout', 'Controllers/authentication/logout.php')->only('authenticated_user');


//user
$router->get('/', 'Controllers/homepage.php');
$router->get('/doctors', 'Controllers/doctor-results.php');
$router->get('/appointments', 'Controllers/user/appointments.php')->only('user');


//appointments
$router->get('/save-time', 'Controllers/appointments/save-time.php');
$router->get('/get-appointments', 'Controllers/appointments/get-appointments.php');
$router->post('/save-appointment-to-db', 'Controllers/appointments/save-appointment-to-db.php')->only('authenticated_user');
$router->delete('/delete-appointment', 'Controllers/appointments/delete-appointment.php')->only('authenticated_user');
