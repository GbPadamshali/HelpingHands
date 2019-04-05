<?php

namespace App\Http\Controllers\HospitalControllers;

use File;
use Auth;
use Image;
use App\UpComingEvent;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManager;
use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Input;

class UpComingEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $events = UpComingEvent::where('hospital_id', $user->id)->paginate(1);
        return view('hospital.upcoming_events.all_upcoming_event')->with(compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.upcoming_events.add_upcoming_event');
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
        $banner_tmp = Input::file('banner');
        $extension = $request->banner->getClientOriginalName();
        $filename = now()->timestamp.$extension;
        $path = 'images/uploaded_images/upcoming_events_banner/';
        $banner_path = $path.$filename;

        if (!File::exists(public_path().'/'.$path)) {
          File::makeDirectory(public_path().'/'.$path, 0777, true);
          Image::make($banner_tmp)->save($banner_path);
        }
        Image::make($banner_tmp)->save($banner_path);

        $input['hospital_id'] = $user->id;
        $input['banner_name'] = $filename;
        $input['banner_path'] = $banner_path;
        $event = UpComingEvent::create($input);
        if (!$event) {
          return redirect()->back()->with('error', 'Requested Event has not been added successfully!!!');
        } else {
          return redirect('ho-admin/ho-events')->with('success', 'Requested Event has been added successfully!!!');
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
        $event = UpComingEvent::where('id', $id)->first();
        return view('hospital.upcoming_events.edit_upcoming_event')->with(compact('event'));
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

        if ($request->hasFile('banner')) {
          $banner_tmp = Input::file('banner');
          $extension = $request->banner->getClientOriginalName();
          $filename = now()->timestamp.$extension;
          $path = 'images/uploaded_images/upcoming_events_banner/';
          $banner_path = $path.$filename;
          if (!File::exists(public_path().'/'.$path)) {
            File::makeDirectory(public_path().'/'.$path, 0777, true);
            Image::make($banner_tmp)->save($banner_path);
          }
          Image::make($banner_tmp)->save($banner_path);
          unset($input['banner']);
          $input['banner_name'] = $filename;
          $input['banner_path'] = $banner_path;
        } else {
          unset($input['banner']);
          // $input['banner_name'] = $filename;
          // $input['banner_path'] = $banner_path;
        }

        $event = UpComingEvent::where('id', $id)->update($input);
        if (!$event) {
          return redirect()->back()->with('error', 'Requested Event has not been updated successfully!!!');
        } else {
          return redirect('ho-admin/ho-events')->with('success', 'Requested Event has been updated successfully!!!');
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
        $event = UpComingEvent::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Event has been deleted successfully!!!');
    }
}
