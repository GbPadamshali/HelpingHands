<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\patients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $patients = patients::where('hospital_id', $user->id)->paginate(1);
        return view('hospital.patients.all_patient')->with(compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.patients.add_patient');
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
        $input['hospital_id'] = $user->id;

        $patient = patients::create($input);
        if (!$patient) {
          return redirect()->back()->with('error', 'Requested Patient has not been added successfully!!!');
        } else {
          return redirect('ho-admin/ho-patients')->with('success', 'Requested Patient has been added successfully!!!');
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
        $patient = patients::where('id', $id)->first();
        return view('hospital.patients.edit_patient')->with(compact('patient'));
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
        $patient = patients::where('id', $id)->update($input);

        if (!$patient) {
          return redirect()->back()->with('error', 'Requested Patient has not been updated successfully!!!');
        } else {
          return redirect('ho-admin/ho-patients')->with('success', 'Requested Patient has been updated successfully!!!');
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
        $patient = patients::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Patient has been deleted successfully!!!');
    }
}
