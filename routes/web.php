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

Route::view('user-login-page', 'user.auth.login');

Auth::routes();

// Admin Routes Starts
Route::group(['prefix' => 'admin'], function(){
  // Auth Routes
  Route::get('/login', 'AdminControllers\AdminAuthController@ShowLoginForm');
  Route::post('/login', 'AdminControllers\AdminAuthController@Login')->name('admin.login');
  Route::get('/register', 'AdminControllers\AdminAuthController@ShowRegistrationForm');
  Route::post('/register', 'AdminControllers\AdminAuthController@Register')->name('admin.register');
  Route::match(['get', 'post'], '/logout', 'AdminControllers\AdminAuthController@Logout')->name('admin.logout');
  // Auth Routes

  Route::group(['middleware' => 'auth'], function(){
    Route::match(['get', 'post'], '/dashboard', 'AdminControllers\AdminAuthController@Dashboard')->name('admin.dashboard');
    Route::resource('admins', 'AdminControllers\AdminsController');
  });
});
// Admin Routes end

// Hospital Routes Starts
  Route::group(['prefix' => 'hospital'], function(){
    Route::view('/dashboard', 'hospital.dashboard');
    // Route::view('/all_doctor', 'hospital.doctors.all_doctors');
    // Route::view('/add_doctor', 'hospital.doctors.add_doctors');
    Route::view('/all_department', 'hospital.Department.all_department');
    Route::view('/add_department', 'hospital.Department.add_department');
    Route::view('/all_nureses', 'hospital.Nureses.all_nureses');
    Route::view('/add_nureses', 'hospital.Nureses.add_nureses');
    Route::view('/all_recetionist', 'hospital.Receptionist.all_recetionist');
    Route::view('/add_recetionist', 'hospital.Receptionist.add_recetionist');
    Route::view('/all_hospital_staff', 'hospital.hospital_staff.all_hospital_staff');
    Route::view('/add_hospital_staff', 'hospital.hospital_staff.add_hospital_staff');

    Route::resource('doctors', 'HospitalControllers\DoctorsController');
    Route::resource('departments', 'HospitalControllers\DepartmentController');
  });


// Hospital Routes Ends

// Route::view('/login', 'admin.auth.login');

Route::get('/home', 'HomeController@index')->name('home');
