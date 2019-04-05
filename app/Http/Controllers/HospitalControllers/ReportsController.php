<?php

namespace App\Http\Controllers\HospitalControllers;

use File;
use Auth;
use App\HospitalReport;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Input;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $reports = HospitalReport::where('hospital_id', $user->id)->paginate(1);
        return view('hospital.report.all_report')->with(compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.report.add_report');
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

        $file = Input::file('file');
        $extension = $request->file->getClientOriginalName();
        $filename = now()->timestamp.$extension;
        $path = 'hospital_reports/uploaded_reports/';
        $report_path = $path.$filename;

        if (!File::exists(public_path().'/'.$path)) {
          File::makeDirectory(public_path(),'/'.$path, 0777, true);
          Input::file('file')->move($path, $filename);
        }
        Input::file('file')->move($path, $filename);
        $input['hospital_id'] = $user->id;
        $input['file_name'] = $file;
        $input['file_path'] = $report_path;
        $report = HospitalReport::create($input);
        if (!$report) {
          return redirect()->back()->with('error', 'Requested Report has not been added successfully!!!');
        } else {
          return redirect('ho-admin/ho-reports')->with('success', 'Requested Report has been added successfully!!!');
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
        $report = HospitalReport::where('id', $id)->first();
        return view('hospital.report.edit_report')->with(compact('report'));
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

        if ($request->hasfile('file')) {
          $file = Input::file('file');
          $extension = $request->file->getClientOriginalName();
          $filename = now()->timestamp.$extension;
          $path = 'hospital_reports/uploaded_reports/';
          $report_path = $path.$filename;
          if (!File::exists(public_path().'/'.$path)) {
            File::makeDirectory(public_path().'/'.$path, 0777, true);
            Input::file('file')->move($path, $filename);
          }
          Input::file('file')->move($path, $filename);

          unset($input['file']);
          $input['file_name'] = $filename;
          $input['file_path'] = $file_path;
        } 
        $report = HospitalReport::where('id', $id)->update($input);
        if (!$report) {
          return redirect()->back()->with('errro', 'Requested Report has not been updated successfully!!!');
        } else {
          return redirect('ho-admin/ho-reports')->with('success', 'Requested Report has been updated successfully!!!');
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
        $report = HospitalReport::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Report has been updated successfully!!!');
    }
}
