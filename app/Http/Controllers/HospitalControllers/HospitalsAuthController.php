<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HospitalsAuthController extends Controller
{
    // function for showing login form
    public function ShowLoginForm()
    {
      return view('hospital.auth.login');
    }

    // function for login function
    public function Login(Request $request)
    {
      $input = $request->except('_token');
      $input['type'] = 'HOSPITAL_ADMIN';
      if (Auth::attempt($input)) {
        return redirect('ho-admin/dashboard');
      }
      return redirect('ho-admin/login')->with('error', 'Please check your credentials and try again');
    }

    // function for showing registration form
    public function ShowRegistrationForm()
    {
      return view('hospitalauth.register');
    }

    // function for Registration
    public function Register(Request $request)
    {
      $input = $request->all();
      $input['password'] = bcrypt($request['password']);
      $input['type'] = $request['role'];
      $user = User::create($input);
      if (!$user) {
        return redirect()->back()->with('error', 'Something went wrong, please try again');
      } else {
        return redirect('/hospital/login')->with('success', 'Registration has been done successfully!!!');
      }

    }

    // logout function
    public function Logout(Request $request)
    {
      if (Auth::logout()) {
        return redirect();
      }
    }
}
