<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class X_RayStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $x_ray_techs = Staff::where(['hospital_id' => 1, 'staff_role' => 5])->paginate(2);
        return view('hospital.x_ray_staff.all_x_ray_staff')->with(compact('x_ray_techs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.x_ray_staff.add_x_ray_staff');
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
        $input['hospital_id'] = 1;
        $input['status'] = 1;
        $x_ray_tech = Staff::create($input);

        if (!$x_ray_tech) {
          return redirect()->back()->with('error', 'Requested Technician has not been added successfully!!!');
        } else {
          return redirect('hospital/ho-x-ray-techs')->with('success', 'Requested Technician has been added successfully!!!');
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
        $x_ray_tech = Staff::where('id', $id)->first();
        return view('hospital.x_ray_staff.edit_x_ray_staff')->with(compact('x_ray_tech'));
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

        $x_ray_tech = Staff::where('id', $id)->update($input);

        if (!$x_ray_tech) {
          return redirect()->back()->with('error', 'Requested Technician has not been updated successfully!!!');
        } else {
          return redirect('hospital/ho-x-ray-techs')->with('success', 'Requested Technician has been updated successfully!!!');
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
        $x_ray_tech = Staff::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Technician has been deleted successfully!!!');
    }
}
