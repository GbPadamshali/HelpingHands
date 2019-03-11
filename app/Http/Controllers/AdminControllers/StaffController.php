<?php

namespace App\Http\Controllers\AdminControllers;

use Auth;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Staff::paginate(2);
        return view('admin.staff.all-staff')->with(compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.add-staff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['hospital_id'] = 1;

        $member = Staff::create($input);
        if (!$member) {
          return view('admin.staff.all-staff')->with('error', 'Requested Satff Member has not been adeed successfully!!!');
        } else {
          return redirect()->back()->with('success', 'Requested staff member has been added successfully!!!');
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
        $member = Staff::where('id', $id)->first();
        return view('admin.staff.edit-staff')->with(compact('member'));
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
        $input = $request()->except('_token');
        $input['hospital_id'] = 1;

        $member = Staff::where('id', $id)->update($input);

        if (!$member) {
          return redirect('admin/staff-members')->with('error', 'Requested Staff Member has been not updated successfully!!!');
        } else {
          return redirect()->back()->with('success', 'Requested staff member has been updated successfully!!!');
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
        $member = Staff::where('id', $id)->delete();
        return redirect('admin/staff-members')->with('success', 'Requested staff member has been deleted successfully!!!');
    }
}
