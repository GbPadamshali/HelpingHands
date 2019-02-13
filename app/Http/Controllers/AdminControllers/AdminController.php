<?php

namespace App\Http\Controllers\AdminControllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function login(Request $request)
    {
      $input = $request->except('_token');
      if (Auth::attempt($input)) {
        return redirect('/admin-dashboard');
      } else {
        return "error";
      }

    }

    public function register(Request $request)
    {
      $input = $request->only(['name', 'email', 'mobile', 'password']);
      $input['password'] = bcrypt($request['password']);
      $input['type'] = 'ADMIN';
      $user = User::create($input);
      if (!$user) {
        return redirect()->back()->with('error', 'Something went wrong, please try again');
      } else {
        return redirect('/admin-login');
      }

    }
}
