<?php

namespace App\Http\Controllers\AdminControllers;

use Auth;
use App\role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = role::paginate(2);
        return view('admin.role.all-role')->with(compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.add-role');
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

        $role = role::create($input);

        if (!$role) {
          return redirect()->back()->with('error', 'Requested Role has not been added successfully!!!');
        } else {
          return redirect('admin/ad-roles')->with('success', 'Requested role has been added successfully!!!');
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
        $role = role::where('id', $id)->first();
        return view('admin.role.edit-role')->with(compact('role'));
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
        $input = $request->except('_token');
        $role = role::where('id', $id)->update($input);

        if (!$role) {
          return redirect()->back()->with('error', 'Requested role has not been updated successfully!!!');
        } else {
          return redirect('admin/ad-roles')->with('Requested Role has been updated successfully!!!');
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
        $role = role::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Role has been deleted successfully!!!');
    }
}
