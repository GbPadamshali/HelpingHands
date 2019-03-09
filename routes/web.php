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
Route::view('dashboard', 'user.dashboard');
Route::view('faq', 'user.pages.faq');
Route::view('services', 'user.pages.services');
Route::view('privacy-policy', 'user.pages.privacy_policy');
Route::view('error-403', 'user.error.error_403');
Route::view('error-404', 'user.error.error_404');
Route::view('error-405', 'user.error.error_405');
Route::view('about-us', 'user.pages.about_us');
Route::view('who-we-are', 'user.pages.who_we_are');
Route::View('reports', 'user.hospital_layout.reports');
Route::view('contact-us', 'user.pages.contact_us');
Route::view('hospital-dashboard', 'user.hospital_pages.dashboard');
Auth::routes();

// Admin Routes Starts
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
Route::group(['prefix' => 'admin'], function(){
  // Auth Routes
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
  Route::view('/add-doctor', 'admin.doctors.add-doctor');
  Route::view('/all-doctor', 'admin.doctors.all-doctor');
  Route::view('/edit-doctor', 'admin.doctors.edit-doctor');
  Route::view('/add-admin', 'admin.admins.add-admin');
  Route::view('/all-admin', 'admin.admins.all-admin');
  Route::view('/edit-admin', 'admin.admins.edit-admin');
  Route::view('/add-department', 'admin.departments.add-department');
  Route::view('/all-department', 'admin.departments.all-department');
  Route::view('/edit-department', 'admin.departments.edit-department');
  Route::view('/add-role', 'admin.role.add-role');
  Route::view('/all-role', 'admin.role.all-role');
  Route::view('/edit-role', 'admin.role.edit-role');
  Route::view('/add-staff', 'admin.staff.add-staff');
  Route::view('/all-staff', 'admin.staff.all-staff');
  Route::view('/edit-staff', 'admin.staff.edit-staff');
  Route::view('/all-report', 'admin.hospital-report.all-report');
  Route::view('/add-report', 'admin.hospital-report.add-report');
  Route::view('/edit-report', 'admin.hospital-report.edit-report');
  Route::view('/add-event', 'admin.upcoming event.add-event');
  Route::view('/all-event', 'admin.upcoming event.all-event');
  Route::view('/edit-event', 'admin.upcoming event.edit-event');
  Route::view('/add-report-type', 'admin.report type.add-report-type');
  Route::view('/all-report-type', 'admin.report type.all-report-type');
  Route::view('/edit-report-type', 'admin.report type.edit-report-type');
  Route::view('/all-reports', 'admin.reports.all-reports');
  Route::view('/reply-report', 'admin.reports.reply-report');
// ]);
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
    Route::view('/all_nureses', 'hospital.Nureses.all_nureses');
    Route::view('/add_nureses', 'hospital.Nureses.add_nureses');
    Route::view('/all_recetionist', 'hospital.Receptionist.all_recetionist');
    Route::view('/add_recetionist', 'hospital.Receptionist.add_recetionist');
    Route::view('/all_hospital_staff', 'hospital.hospital_staff.all_hospital_staff');
    Route::view('/add_hospital_staff', 'hospital.hospital_staff.add_hospital_staff');

    Route::view('/login', 'hospital.auth.login');
    Route::view('/register', 'hospital.auth.register');

    Route::group(['middleware' => 'auth'], function(){
      Route::resource('doctors', 'HospitalControllers\DoctorsController');
      Route::resource('departments', 'HospitalControllers\DepartmentController');
    });
  });


// Hospital Routes Ends

// Route::view('/login', 'admin.auth.login');

// Route::get('/home', 'HomeController@index')->name('home');
