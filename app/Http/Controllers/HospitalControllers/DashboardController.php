<?php

namespace App\Http\Controllers\HospitalControllers;

use Auth;
use App\Staff;
use App\doctor;
use App\Appointment;
use App\Hospitals;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // $user = Auth::User();
        $date = date("Y-m-d");
        $data['hospital'] = Hospitals::where('user_id', 1)->first();
        $data['doctors'] = doctor::where('hospital_id', $data['hospital']->id)->count();
        $data['nurses'] = Staff::where(['hospital_id' => $data['hospital']->id, 'staff_role' => 1])->count();
        $data['pharmachist'] = Staff::where(['hospital_id' => $data['hospital']->id, 'staff_role' => 2])->count();
        $data['receptionist'] = Staff::where(['hospital_id' => $data['hospital']->id, 'staff_role' => 3])->count();
        $data['other'] = Staff::where(['hospital_id' => $data['hospital']->id, 'staff_role' => 4])->count();
        $data['appointment'] = Appointment::where(['hospital_id'=>1, 'visiting_date'=>$date, 'status'=>'PENDING'])->get();
        // return $data['appointment'];
        return view('hospital.dashboard')->with(compact('data'));
    }
}
