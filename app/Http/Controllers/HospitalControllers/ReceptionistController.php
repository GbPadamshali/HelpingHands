<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReceptionistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $receptionists = Staff::where(['hospital_id' => 1, 'staff_role' => 3])->paginate(2);
      return view('hospital.receptionist.all_receptionist')->with(compact('receptionists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.receptionist.add_receptionist');
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
      $nurse = Staff::create($input);

      if (!$nurse) {
        return redirect()->back()->with('error', 'Requested Receptionist has not been added successfully!!!');
      } else {
        return redirect('hospital/ho-receptionists')->with('success', 'Requested Receptionist has been added successfully!!!');
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
      $receptionist = Staff::where('id', $id)->first();
      return view('hospital.receptionist.edit_receptionist')->with(compact('receptionist'));
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

      $receptionist = Staff::where('id', $id)->update($input);

      if (!$receptionist) {
        return redirect()->back()->with('error', 'Requested Receptionist has not been updated successfully!!!');
      } else {
        return redirect('hospital/ho-receptionists')->with('success', 'Requested Receptionist has been updated successfully!!!');
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
      $receptionist = Staff::where('id', $id)->delete();
      return redirect()->back()->with('success', 'Requested Receptionist has been deleted successfully!!!');
    }
}
