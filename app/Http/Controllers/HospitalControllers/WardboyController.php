<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WardboyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wardboys = Staff::where(['hospital_id' => 1, 'staff_role' => 6])->paginate(2);
        return view('hospital.wardboy.all_wardboy')->with(compact('wardboys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.wardboy.add_wardboy');
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
        $wardboy = Staff::create($input);

        if (!$wardboy) {
          return redirect()->back()->with('error', 'Requested Wardboy has not been added successfully!!!');
        } else {
          return redirect('hospital/ho-wardboys')->with('success', 'Requested Wardboy has been added successfully!!!');
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
        $wardboy = Staff::where('id', $id)->first();
        return view('hospital.wardboy.edit_wardboy')->with(compact('wardboy'));
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

        $wardboy = Staff::where('id', $id)->update($input);

        if (!$wardboy) {
          return redirect()->back()->with('error', 'Requested Wardboy has not been updated successfully!!!');
        } else {
          return redirect('hospital/ho-wardboys')->with('success', 'Requested Wardboy has been updated successfully!!!');
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
        $wardboy = Staff::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Wardboy has been deleted successfully!!!');
    }
}
