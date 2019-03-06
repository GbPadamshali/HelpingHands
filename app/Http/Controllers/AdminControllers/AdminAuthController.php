<?php

namespace App\Http\Controllers\AdminControllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Login(Request $request)
    {
        $input = $request->except('_token');
        $input['type'] = 'ADMIN';
        if (Auth::attempt($input)) {
          return redirect('/admin/dashboard');
        } else {
          return redirect('/admin/login')->with('error', 'Please check your credentials and try again');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ShowRegistrationForm()
    {
        return view('admin.auth.register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Register(Request $request)
    {
        $input = $request->only(['name', 'email', 'password', 'mobile']);
        $input['password'] = bcrypt($request['password']);
        $input['type'] = 'ADMIN';
        $user = User::create($input);
        if (!$user) {
          return redirect()->back()->with('error', 'Something went wrong, please try again');
        } else {
          return redirect('/admin/login')->with('success', 'Registration has been done successfully!!!');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Logout(Request $request)
    {
        if (Auth::logout()) {
          return redirect()->back()->with('error', 'Logout is not done successfully!!!');
        } else {
          return redirect('/admin/login')->with('success', 'Logout is done successfully!!!');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
