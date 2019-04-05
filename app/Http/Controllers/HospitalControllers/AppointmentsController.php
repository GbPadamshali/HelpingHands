<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $appointments = Appointment::where('hospital_id', $user->id)->paginate(1);
        return view('hospital.appointments.all_appointment')->with(compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.appointments.add_appointment');
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
        $input['status'] = 'PENDING';

        $appointment = Appointment::create($input);

        if (!$appointment) {
          return redirect()->back()->with('error', 'Requested Appointment has not been added successfully!!!');
        } else {
          return redirect('ho-admin/ho-appointments')->with('success', 'Requested Appointment has been added successfully!!!');
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
        $appointment = Appointment::where('id', $id)->first();
        return view('hospital.appointments.edit_appointment')->with(compact('appointment'));
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

        $appointment = Appointment::where('id', $id)->update($input);

        if (!$appointment) {
          return redirect()->back()->with('error', 'Requested Appointment has not been updated successfully!!!!');
        } else {
          return redirect('ho-admin/ho-appointments')->with('success', 'Requested Appointment has been updated successfully!!!');
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
        $appointment = Appointment::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Appointment has been deleted successfully!!!');
    }

    public function TodayAppointments()
    {
      $user = Auth::User();
      // $date = today();
      $date = date("Y-m-d");
      // return $date;
      $appointments = Appointment::where(['hospital_id'=>$user->id, 'visiting_date'=>$date, 'status'=>'PENDING'])->paginate(1);
      return view('hospital.today_appointment.all_todays_appointment')->with(compact('appointments'));
    }

    public function AppointmentTaken($id)
    {
      $appointment = Appointment::where('id', $id)->update('status', 'TAKEN');
      if (!$appointment) {
        return redirect()->back()->with('error', 'Requested Appointment has not been taken successfully!!!');
      } else {
        return redirect()->back()->with('success', 'Requested Appointment has been taken successfully!!!');
      }

    }

    public function AppointmentInprocess($id)
    {
      $appointment = Appointment::where('id', $id)->update(['status'=>'INPROCESS']);
      if (!$appointment) {
        return redirect()->back()->with('error', 'Please Try Again...');
      } else {
        return redirect()->back()->with('success', 'Success!!!');
      }

    }

    public function ViewAppointment($id)
    {
      $appointment = Appointment::where('id', $id)->first();
      return view('hospital.today_appointment.view_today_appointment')->with(compact('appointment'));
    }
}
