<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $services = service::where('hospital_id', $user->id)->paginate(1);
        return view('hospital.services.all_service')->with(compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('hospital.services.add_service');
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
      $service = service::create($input);
      if (!$service) {
        return redirect()->back()->with('error', 'Requested Service has not been added successfully!!!');
      } else {
        return redirect('ho-admin/ho-services')->with('success', 'Requested Service has been added successfully!!!');
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
        $service = service::where('id', $id)->first();
        return view('hospital.services.edit_service')->with(compact('service'));
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
        $service = service::where('id', $id)->update($input);
        if (!$service) {
          return redirect()->back()->with('error', 'Requested Service has not been updated successfully!!!');
        } else {
          return redirect('ho-admin/ho-services')->with('success', 'Requested Service has been updated successfully!!!');
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
        $service = service::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Service has been deleted successfully!!!');
    }
}
