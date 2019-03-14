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
        $hospital = Hospitals::where('user_id', $id)->first();
        // $departments['count'] = Department::where('hospital_id', $id)->count();
        // $doctorCount['count'] = doctor::where('hospital_id', $id)->count();
        $doctors = doctor::where('hospital_id', $id)->get(3);
        return view('user.hospital_pages.dashboard1')->with(compact(['hospital', 'doctors']));
    }
}
