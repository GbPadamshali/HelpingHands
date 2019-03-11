<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NursingStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nurses = Staff::where(['hospital_id' => 1, 'staff_role' => 1])->paginate(2);
        return view('hospital.nurses.all_nurses')->with(compact('nurses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.nurses.add_nurses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // IMPORTANT CODE FOR URL IDENTIFICATION
      // $req = $request->url();
      // if (strripos($req, 'hospital') !== false) {
      //   return 'Success';
      // } else {
      //   return 'Failed';
      // }
      // return $check;
        $user = Auth::User();
        $input = $request->all();
        $input['hospital_id'] = 1;
        $input['status'] = 1;
        $nurse = Staff::create($input);

        if (!$nurse) {
          return redirect()->back()->with('error', 'Requested Nurse has not been added successfully!!!');
        } else {
          return redirect('hospital/ho-nurses')->with('success', 'Requested Nurse has been added successfully!!!');
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
        $nurse = Staff::where('id', $id)->first();
        return view('hospital.nurses.edit_nurses')->with(compact('nurse'));
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

        $nurse = Staff::where('id', $id)->update($input);

        if (!$nurse) {
          return redirect()->back()->with('error', 'Requested Nurse has not been updated successfully!!!');
        } else {
          return redirect('hospital/ho-nurses')->with('success', 'Requested Nurse has been updated successfully!!!');
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
        $nurse = Staff::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Nurse has been deleted successfully!!!');
    }
}
