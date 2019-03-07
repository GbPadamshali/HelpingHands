<?php

namespace App\Http\Controllers\HospitalControllers;

use File;
use Auth;
use Image;
use Validator;
use App\doctor;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Image\ImageManager;
use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Input;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = doctor::where('hospital_id', 1)->paginate(2);
        return view('hospital.doctors.all_doctors')->with(compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.doctors.add_doctors');
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
        // $hospital_id = Auth::
        $input = $request->all();
        // return $input;
        // return $request;
        $image_tmp = Input::file('image');
        $extension = $request->image->getClientOriginalName();
        $filename = now()->timestamp.$extension;
        $path = 'images/uploaded_images/doctors/';
        $image_path = $path.$filename;

        // Resize images
        if (!File::exists(public_path().'/'.$path)) {
          File::makeDirectory(public_path().'/'.$path, 0777, true);
          Image::make($image_tmp)->save($image_path);
        }
        Image::make($image_tmp)->save($image_path);

        $input['hospital_id'] = Auth::User()->id;
        $input['department_id'] = 1;
        $input['image_name'] = $filename;
        $input['image_path'] = $image_path;
        $doctor = doctor::create($input);
        if (!$doctor) {
          return redirect()->back()->with('error', 'Doctor has been not added successfully!!');
        } else {
          return redirect('hospital/doctors');
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
        return view('hospital.doctors.all_doctors');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = doctor::where('id', $id)->first();
        return view('hospital.doctors.edit_doctors')->with(compact('doctor'));
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

        $input = $request->except(['_token']);
        // return $input;
        $input['hospital_id'] = $user->id;
        // $input['department_id'] = 1;

        $image_tmp = Input::file('image');
        $extension = $request->image->getClientOriginalName();
        $filename = now()->timestamp.$extension;
        $path = 'images/uploaded_images/doctors/';
        $image_path = $path.$filename;
        if ($request->hasFile('image')) {
          // Resize images
          if (!File::exists(public_path().'/'.$path)) {
            File::makeDirectory(public_path().'/'.$path, 0777, true);
            Image::make($image_tmp)->save($image_path);
          }
          Image::make($image_tmp)->save($image_path);

          unset($input['image']);
          $input['image_name'] = $filename;
          $input['image_path'] = $image_path;
          // return $input;
        } else {
          unset($input['image']);
          $input['image_name'] = $filename;
          $input['image_path'] = $image_path;
        }
        $doctor = doctor::where('id', $id)->update($input);
        if (!$doctor) {
          return redirect('doctors.index')->with('error', 'Doctor details has not been updated successfully!!!');
        } else {
          return redirect()->back()->with('success', 'Doctor details has been updated successfully!!!');
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
        $doctor = doctor::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Doctor has been removed successfully!!!');
    }
}
