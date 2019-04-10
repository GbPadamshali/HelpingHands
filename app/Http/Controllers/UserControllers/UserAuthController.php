<?php

namespace App\Http\Controllers\UserControllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    public function ShowLoginForm()
    {
      return view('user.auth.login');
    }

    public function Login(Request $request)
    {
        $input = $request->except('_token');
        $input['type'] = 'USER';
        if (Auth::attempt($input)) {
          return redirect('/');
        } else {
          return redirect()->back()->with('error', 'Please enter correct Credentials');
        }
    }

    public function ShowRegistrationForm()
    {
      return view('user.auth.signup');
    }

    public function Register(Request $request)
    {
      $input = $request->except(['_token', 'retype-password']);
      $input['password'] = bcrypt($request['password']);
      $input['type'] = 'USER';
      $user = User::create($input);
      if (!$user) {
        return redirect()->back()->with('error', 'Something went wrong, please try again...');
      } else {
        return redirect('/')->with('success', 'Registration has been done successfully!!!');
      }

    }

    public function Logout(Request $request)
    {
      if (Auth::logout()) {
        return redirect()->back()->with('error', 'Logout is not done successfully!!!');
      } else {
        return redirect('/')->with('success', 'Logout is done successfully!!!');
      }

    }

    public function Dashboard()
    {
      if (Auth::check()) {
        $user = Auth::User();
        return view('user.dashboard')->with(compact('user'));
      }
      return view('user.dashboard');
    }
}
