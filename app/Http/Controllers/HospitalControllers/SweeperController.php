<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SweeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sweepers = Staff::where(['hospital_id' => 1, 'staff_role' => 4])->paginate(2);
      return view('hospital.sweeper.all_sweeper')->with(compact('sweepers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.sweeper.add_sweeper');
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
      $sweeper = Staff::create($input);

      if (!$sweeper) {
        return redirect()->back()->with('error', 'Requested Sweeper has not been added successfully!!!');
      } else {
        return redirect('hospital/ho-sweepers')->with('success', 'Requested Sweeper has been added successfully!!!');
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
      $sweeper = Staff::where('id', $id)->first();
      return view('hospital.sweeper.edit_sweeper')->with(compact('sweeper'));
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

      $sweeper = Staff::where('id', $id)->update($input);

      if (!$sweeper) {
        return redirect()->back()->with('error', 'Requested Sweeper has not been updated successfully!!!');
      } else {
        return redirect('hospital/ho-sweepers')->with('success', 'Requested Sweeper has been updated successfully!!!');
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
      $sweeper = Staff::where('id', $id)->delete();
      return redirect()->back()->with('success', 'Requested Sweeper has been deleted successfully!!!');
    }
}
