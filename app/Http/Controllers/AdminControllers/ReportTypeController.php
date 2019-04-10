<?php

namespace App\Http\Controllers\AdminControllers;

use Auth;
use App\ReportType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = ReportType::paginate(1);
        return view('admin.report_type.all-report-type')->with(compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.report_type.add-report-type');
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
        $report = ReportType::create($input);

        if (!$report) {
          return redirect()->back()->with('error', 'Requested Report Type has not been added successfully!!!');
        } else {
          return redirect('admin/ad-report-types')->with('success', 'Requested Report Type has been added successfully!!!');
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
        $report = ReportType::where('id', $id)->first();
        return view('admin.report_type.edit-report-type')->with(compact('report'));
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
        $report = ReportType::where('id', $id)->update($input);

        if (!$report) {
          return redirect()->back()->with('error', 'Requested Report Type has not been updated successfully!!!');
        } else {
          return redirect('admin/ad-report-types')->with('success', 'Requested Report Type has been updated successfully!!!');
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
        $report = ReportType::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Report Type has been deleted successfully!!!');
    }
}
