<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $facilities = Facility::where('hospital_id', $user->id)->paginate(1);
        return view('hospital.facility.all_facility')->with(compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.facility.add_facility');
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

        $facility = Facility::create($input);
        if (!$facility) {
          return redirect()->back()->with('error', 'Requested Facility has not been added successfully!!!');
        } else {
          return redirect('ho-admin/ho-facilities')->with('success', 'Requested Facility has been added successfully!!!');
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
        $facility = Facility::where('id', $id)->first();
        return view('hospital.facility.edit_facility')->with(compact('facility'));
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

        $facility = Facility::where('id', $id)->update($input);
        if (!$facility) {
          return redirect()->back()->with('error', 'Requested Facility has not been updated successfully!!!');
        } else {
          return redirect('ho-admin/ho-facilities')->with('success', 'Requested Facility has been updated successfully!!!');
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
        $facility = Facility::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Facility has been deleted successfully!!!');
    }
}
