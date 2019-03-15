<?php

namespace App\Http\Controllers\UserControllers;
use File;
use Image;
use App\doctor;
use App\Hospitals;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Image\ImageManager;
use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Input;

class HospitalDashboardController extends Controller
{
    public function HospitalDashboard($id)
    {
        // return "Success";
        $data['hospital'] = Hospitals::where('user_id', $id)->first();
        $data['departments'] = Department::where('hospital_id', $id)->count();
        $data['doctorCount'] = doctor::where('hospital_id', $id)->count();
        $data['doctors'] = doctor::where('hospital_id', $id)->get();
        // return $data;
        return view('user.hospital_pages.dashboard1')->with(compact(['data']));
    }
}
