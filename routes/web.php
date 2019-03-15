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

Route::view('user-login-page', 'user.auth.login');
Route::view('user-signup-page', 'user.auth.signup');
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
// Route::view('booking', 'user.hospital_pages.booking');
Route::get('hospital/{id}', 'UserControllers\HospitalDashboardController@HospitalDashboard');
// Route::view('test/{id}', 'user.hospital_pages.test');
Route::get('booking/{id}', function(){
  return view('user.hospital_pages.booking');
});
Auth::routes();

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
  });
});
// Admin Routes end

// Hospital Routes Starts
  Route::group(['prefix' => 'hospital'], function(){
    Route::view('/dashboard', 'hospital.dashboard');
    // Route::view('/all_doctor', 'hospital.doctors.all_doctors');
    // Route::view('/add_doctor', 'hospital.doctors.add_doctors');
    Route::view('/edit_doctor', 'hospital.doctors.edit_doctors');

    Route::view('/all_department', 'hospital.Department.all_department');
    Route::view('/add_department', 'hospital.Department.add_department');
    Route::view('/all_nurses', 'hospital.nurses.all_nurses');
    Route::view('/add_nurses', 'hospital.nurses.add_nurses');
    Route::view('/edit_nurses', 'hospital.nurses.edit_nurses');
    Route::view('/all_recetionist', 'hospital.receptionist.all_recetionist');
    Route::view('/add_recetionist', 'hospital.receptionist.add_recetionist');
    Route::view('/edit_recetionist', 'hospital.receptionist.edit_recetionist');
    Route::view('/all_hospital_staff', 'hospital.hospital_staff.all_hospital_staff');
    Route::view('/add_hospital_staff', 'hospital.hospital_staff.add_hospital_staff');
    Route::view('/edit_hospital_staff', 'hospital.hospital_staff.edit_hospital_staff');
    Route::view('/all_report', 'hospital.report.all_report');
    Route::view('/add_report', 'hospital.report.add_report');
    Route::view('/edit_report', 'hospital.report.edit_report');
    Route::view('/all_sweeper', 'hospital.swiper.all_sweeper');
    Route::view('/add_sweeper', 'hospital.swiper.add_sweeper');
    Route::view('/edit_sweeper', 'hospital.swiper.edit_sweeper');
    Route::view('/all_wardboy', 'hospital.wardboy.all_wardboy');
    Route::view('/add_wardboy', 'hospital.wardboy.add_wardboy');
    Route::view('/edit_wardboy', 'hospital.wardboy.edit_wardboy');
    Route::view('/all_x-ray_technician', 'hospital.x-ray-staff.all_x-ray_staff');
    Route::view('/add_x-ray_technician', 'hospital.x-ray-staff.add_x-ray_staff');
    Route::view('/edit_x-ray_technician', 'hospital.x-ray-staff.edit_x-ray_staff');
    Route::view('/all_pharmacy_staff', 'hospital.pharmacy_staff.all_pharmacy_staff');
    Route::view('/add_pharmacy_staff', 'hospital.pharmacy_staff.add_pharmacy_staff');
    Route::view('/edit_pharmacy_staff', 'hospital.pharmacy_staff.edit_pharmacy_staff');
      Route::view('/add-room', 'hospital.room.add_room');
      Route::view('/all-room', 'hospital.room.all_room');
      Route::view('/edit-room', 'hospital.room.edit_room');
      Route::view('/edit-patient', 'hospital.patients.edit_patient');
      Route::view('/add-patient', 'hospital.patients.add_patient');
      Route::view('/all-patient', 'hospital.patients.all_patient');
      Route::view('/all-upcoming-event', 'hospital.upcoming_events.all_upcoming_event');
      Route::view('/add-upcoming-event', 'hospital.upcoming_events.add_upcoming_event');
      Route::view('/edit-upcoming-event', 'hospital.upcoming_events.edit_upcoming_event');
      Route::view('/all-appointment', 'hospital.appointments.all_appointment');
      Route::view('/add-appointment', 'hospital.appointments.add_appointment');
      Route::view('/edit-appointment', 'hospital.appointments.edit_appointment');
      Route::view('/edit-service', 'hospital.services.edit_service');
      Route::view('/all-service', 'hospital.services.all_service');
      Route::view('/add-service', 'hospital.services.add_service');
      Route::view('/add-facility', 'hospital.facility.add_facility');
      Route::view('/all-facility', 'hospital.facility.all_facility');
      Route::view('/edit-facility', 'hospital.facility.edit_facility');
      Route::view('/all-today-appointment', 'hospital.today_appointment.all_todays_appointment');
        Route::view('/view-today-appointment', 'hospital.today_appointment.view_today_appointment');


    Route::view('/login', 'hospital.auth.login');
    Route::view('/register', 'hospital.auth.register');

    Route::group(['middleware' => 'auth'], function(){
    Route::resource('doctors', 'HospitalControllers\DoctorsController');
    Route::resource('departments', 'HospitalControllers\DepartmentController');
    Route::resource('ho-nurses', 'HospitalControllers\NursingStaffController');
    Route::resource('ho-pharmacy-staff', 'HospitalControllers\PharmacyStaffController');
    Route::resource('ho-receptionists', 'HospitalControllers\ReceptionistController');
    Route::resource('ho-sweepers', 'HospitalControllers\SweeperController');
    Route::resource('ho-x-ray-techs', 'HospitalControllers\X_RayStaffController');
    Route::resource('ho-wardboys', 'HospitalControllers\WardboyController');
    });
  });


// Hospital Routes Ends

// Route::view('/login', 'admin.auth.login');

// Route::get('/home', 'HomeController@index')->name('home');
