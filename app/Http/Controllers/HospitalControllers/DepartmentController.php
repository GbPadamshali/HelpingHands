<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::where('hospital_id', Auth::User()->id)->paginate(2);
        return view('hospital.department.all_department')->with(compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.department.add_department');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::User()->id;
        $input = $request->all();
        $input['hospital_id'] = $user;
        $department = Department::create($input);
        if (!$department) {
          return redirect()->back()->with('error', 'Requested department does not added successfully!!!');
        } else {
          return redirect('hospital/departments')->with('success', 'Requested department has been added successfully!!!');
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
        $department = Department::where('id', $id)->first();
        return view('hospital.department.edit_department')->with(compact('department'));
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
        $department = Department::where('id', $id)->update($input);
        if (!$department) {
          return redirect()->back()->with('error', 'Requested department does not updated successfully!!!');
        } else {
          return redirect('hospital/departments')->with('success', 'Requested department has been updated successfully!!');
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
        $department = Department::where('id', $id)->delete();
        return redirect('hospital/departments')->with('success', 'Requested department has been removed successfully!!!');
    }
}
