<?php

namespace App\Http\Controllers\HospitalCOntrollers;

use Auth;
use App\Rooms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $rooms = Rooms::where('hospital_id', $user->id)->paginate(1);
        return view('hospital.room.all_room')->with(compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.room.add_room');
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
        $room = Rooms::create($input);

        if (!$room) {
          return redirect()->back()->with('error', 'Requested Room has been not added successfully!!!');
        } else {
          return redirect('ho-admin/ho-rooms')->with('success', 'Requested Room has been added successfully!!!');
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
        $room = Rooms::where('id', $id)->first();
        return view('hospital.room.edit_room')->with(compact('room'));
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
        $room = Rooms::where('id', $id)->update($input);

        if (!$room) {
          return redirect()->back()->with('error', 'Requested Room has not been updated successfully!!!');
        } else {
          return redirect('ho-admin/ho-rooms')->with('success', 'Requested Room has been updated successfully!!!');
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
        $room = Rooms::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Requested Room has been deleted successfully!!!');
    }
}
