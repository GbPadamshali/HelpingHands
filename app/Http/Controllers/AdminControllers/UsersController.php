<?php

namespace App\Http\Controllers\AdminControllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(2);
        return view('admin.users.all-user')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.add-users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::User();

        $input = $request->all();
        $user = User::create($input);

        if (!$user) {
          return redirect()->back()->with('error', 'Requested User has been not added successfully!!!');
        } else {
          return redirect('admin/ad-users')->with('success', 'Requested User has been added successfully!!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.users.edit-user')->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::User();
        $input = $request->except('_token');
        $user = User::where('id', $id)->update($input);

        if (!$user) {
          return redirect()->back()->with('error', 'Requested User has not been updated successfully!!!');
        } else {
          return redirect('admin/ad-users')->with('success', 'Requested User has been updated successfully!!!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $use = User::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested user has been deleted successfully!!!');
    }
}
