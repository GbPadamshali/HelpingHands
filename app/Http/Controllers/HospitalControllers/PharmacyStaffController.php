<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PharmacyStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pharmacists = Staff::where(['hospital_id' => 1, 'staff_role' => 2])->paginate(2);
      return view('hospital.pharmacy_staff.all_pharmacy_staff')->with(compact('pharmacists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.pharmacy_staff.add_pharmacy_staff');
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
      $pharmacist = Staff::create($input);

      if (!$pharmacist) {
        return redirect()->back()->with('error', 'Requested Pharmacist has not been added successfully!!!');
      } else {
        return redirect('hospital/ho-pharmacy-staff')->with('success', 'Requested Pharmacist has been added successfully!!!');
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
      $pharmacist = Staff::where('id', $id)->first();
      return view('hospital.pharmacy_staff.edit_pharmacy_staff')->with(compact('pharmacist'));
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

      $pharmacist = Staff::where('id', $id)->update($input);

      if (!$pharmacist) {
        return redirect()->back()->with('error', 'Requested Pharmacist has not been updated successfully!!!');
      } else {
        return redirect('hospital/ho-pharmacy-staff')->with('success', 'Requested Pharmacist has been updated successfully!!!');
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
      $pharmacist = Staff::where('id', $id)->delete();
      return redirect()->back()->with('success', 'Requested Pharmacist has been deleted successfully!!!');
    }
}
