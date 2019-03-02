<?php

namespace App\Http\Controllers\AdminControllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.all-admins');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token']);
        $input['type'] = 'ADMIN';
        $user = User::create($input);
        if (!$user) {
          return redirect()->back()->with('error', 'Something went wrong, Please try again.');
        } else {
          return redirect('admin.index')->with('success', 'Admin has been added successfully.');
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
        $admin = User::where('id', $id)->first();
        if (!$admin) {
          return redirect()->back()->with('error', 'Requested Admin is not available');
        } else {
          return view('admin.all-admins')->with(compact('admin'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $admin = User::where('id', $id)->first();
      if (!$admin) {
        return redirect()->back()->with('error', 'Requested Admin is not available');
      } else {
        return view('admin.all-admins')->with(compact('admin'));
      }
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
