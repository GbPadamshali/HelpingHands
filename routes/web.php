<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::permanentRedirect('/', '/dashboard');

Route::get('/login', 'UserControllers\UserAuthController@ShowLoginForm');
Route::post('/login-post', 'UserControllers\UserAuthController@Login');
Route::get('/sign-up', 'UserControllers\UserAuthController@ShowRegistrationForm');
Route::post('/sign-up-post', 'UserControllers\UserAuthController@Register');
Route::view('dashboard', 'user.dashboard');
Route::view('faq', 'user.pages.faq');
Route::view('services', 'user.pages.services');
Route::view('subscribe', 'user.pages.pricing_table');
Route::view('privacy-policy', 'user.pages.privacy_policy');
Route::view('error-403', 'user.error.error_403');
Route::view('error-404', 'user.error.error_404');
Route::view('error-405', 'user.error.error_405');
Route::view('about-us', 'user.pages.about_us');
Route::view('who-we-are', 'user.pages.who_we_are');
Route::View('reports', 'user.hospital_layout.reports');
Route::view('contact-us', 'user.pages.contact_us');
Route::view('abc-hospital', 'user.hospital_pages.dashboard');
Route::view('h-contact-us', 'user.hospital_pages.h_contact_us');
Route::view('user-profile-edit', 'user.pages.user_profile');
Route::view('doctor-profile', 'user.pages.doctor_profile');
// Route::view('booking', 'user.hospital_pages.booking');
Route::get('hospital/{id}', 'UserControllers\HospitalDashboardController@HospitalDashboard');
// Route::view('test/{id}', 'user.hospital_pages.test');
Route::get('booking/{id}', function(){
  return view('user.hospital_pages.booking');
});
// Auth::routes();

// Admin Routes Starts
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
Route::group(['prefix' => 'admin'], function(){
  // Auth Routes
  Route::match(['get', 'post'], '/dashboard', 'AdminControllers\AdminAuthController@Dashboard')->name('admin.dashboard');
  Route::get('/login', 'AdminControllers\AdminAuthController@ShowLoginForm');
  Route::post('/login', 'AdminControllers\AdminAuthController@Login')->name('admin.login');
  Route::get('/register', 'AdminControllers\AdminAuthController@ShowRegistrationForm');
  Route::post('/register', 'AdminControllers\AdminAuthController@Register')->name('admin.register');
  Route::match(['get', 'post'], '/logout', 'AdminControllers\AdminAuthController@Logout')->name('admin.logout');
  Route::view('/add-team', 'admin.team.add-team');
  Route::view('/all-team', 'admin.team.all-team');
  Route::view('/update-team', 'admin.team.update-team');
  Route::view('/add-user', 'admin.users.add-user');
  Route::view('/all-user', 'admin.users.all-user');
  Route::view('/edit-user', 'admin.users.edit-user');
  Route::view('/add-admin', 'admin.admins.add-admin');
  Route::view('/all-admin', 'admin.admins.all-admin');
  Route::view('/edit-admin', 'admin.admins.edit-admin');
  Route::view('/add-department', 'admin.departments.add-department');
  Route::view('/all-department', 'admin.departments.all-department');
  Route::view('/edit-department', 'admin.departments.edit-department');
  Route::view('/add-doctor', 'admin.doctors.add-doctor');
  Route::view('/all-doctor', 'admin.doctors.all-doctor');
  Route::view('/edit-doctor', 'admin.doctors.edit-doctor');
  Route::view('/add-report', 'admin.hospital-report.add-report');
  Route::view('/all-report', 'admin.hospital-report.all-report');
  Route::view('/edit-report', 'admin.hospital-report.edit-report');
  Route::view('/add-report-type', 'admin.report type.add-report-type');
  Route::view('/all-report-type', 'admin.report type.all-report-type');
  Route::view('/edit-report-type', 'admin.report type.edit-report-type');
  Route::view('/view-report', 'admin.reports.view-report');
  Route::view('/all-reports', 'admin.reports.all-reports');
  Route::view('/reply-report', 'admin.reports.reply-report');
  Route::view('/add-role', 'admin.role.add-role');
  Route::view('/all-role', 'admin.role.all-role');
  Route::view('/edit-role', 'admin.role.edit-role');
  Route::view('/all-staff', 'admin.staff.all-staff');
  Route::view('/add-staff', 'admin.staff.add-staff');
  Route::view('/edit-staff', 'admin.staff.edit-staff');
  Route::view('/all-event', 'admin.upcoming event.all-event');
  Route::view('/add-event', 'admin.upcoming event.add-event');
  Route::view('/edit-event', 'admin.upcoming event.edit-event');

  // Auth Routes

  Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::resource('admins', 'AdminControllers\AdminsController');
    Route::resource('ad-doctors', 'AdminControllers\DoctorController');
    Route::resource('ad-departments', 'AdminControllers\DepartmentController');
    Route::resource('staff-members', 'AdminControllers\StaffController');
    Route::resource('ad-roles', 'AdminControllers\RoleController');
    Route::resource('ad-hospital-reports', 'AdminControllers\HospitalReportController');
    Route::resource('ad-upcoming-events', 'AdminControllers\UpComingEventsController');
    Route::resource('ad-report-types', 'AdminControllers\ReportTypeController');
  });
});
// Admin Routes end

// Hospital Routes Starts
  Route::group(['prefix' => 'ho-admin'], function(){
    Route::get('/dashboard', 'HospitalControllers\DashboardController@index');

    Route::view('/register', 'hospital.auth.register');
    Route::view('/login', 'hospital.auth.login');
    Route::post('login', 'HospitalControllers\HospitalsAuthController@Login');
    Route::group(['middleware' => 'auth'], function(){
      Route::resource('doctors', 'HospitalControllers\DoctorsController');
      Route::resource('departments', 'HospitalControllers\DepartmentController');
      Route::resource('ho-nurses', 'HospitalControllers\NursingStaffController');
      Route::resource('ho-pharmacy-staff', 'HospitalControllers\PharmacyStaffController');
      Route::resource('ho-receptionists', 'HospitalControllers\ReceptionistController');
      Route::resource('ho-sweepers', 'HospitalControllers\SweeperController');
      Route::resource('ho-x-ray-techs', 'HospitalControllers\X_RayStaffController');
      Route::resource('ho-wardboys', 'HospitalControllers\WardboyController');
      Route::resource('ho-reports', 'HospitalControllers\ReportsController');
      Route::resource('ho-rooms', 'HospitalControllers\RoomsController');
      Route::resource('ho-events', 'HospitalControllers\UpComingEventsController');
      Route::resource('ho-patients', 'HospitalControllers\PatientsController');
      Route::resource('ho-appointments', 'HospitalControllers\AppointmentsController');
      Route::resource('ho-facilities', 'HospitalControllers\FacilitiesController');
      Route::resource('ho-services', 'HospitalControllers\ServicesController');
      Route::get('ho-today-appointments', 'HospitalControllers\AppointmentsController@TodayAppointments');
      Route::get('ho-today-appointments/{id}/taken', 'HospitalControllers\AppointmentsController@AppointmentTaken');
      Route::get('ho-today-appointments/{id}/inprocess', 'HospitalControllers\AppointmentsController@AppointmentInprocess');
      Route::get('ho-today-appointments/{id}/view', 'HospitalControllers\AppointmentsController@Vie                   wAppointment');
    });
  });


// Hospital Routes Ends

// Route::view('/login', 'admin.auth.login');

// Route::get('/home', 'HomeController@index')->name('home');
