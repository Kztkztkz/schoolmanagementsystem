<?php

namespace App\Http\Controllers;

use App\Models\Classitem;
use App\Models\Room;
use App\Models\Course;
use App\Http\Requests\StoreClassitemRequest;
use App\Http\Requests\UpdateClassitemRequest;

class ClassitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('classitem.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomoption = Room::all();
        $courseoption = Course::all();
        return view('classitem.create',compact(['roomoption','courseoption']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClassitemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassitemRequest $request)
    {
        $days = $request->days;
        $day_string = implode(',', $days);

        Classitem::create([
            'name' => $request->name,
            'start_date' => $request->startdate,
            'end_date' => $request->enddate,
            'course_id' => $request->course,
            'start_time' => $request->starttime,
            'end_time' => $request->endtime,
            'room_id' => $request->room,
            'day' => $day_string,
            'price' => $request->price,
            'max_student' => $request->maxstudent,
            'container_color' => $request->color,
        ]);

       return redirect()->back()->with('message','Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classitem  $classitem
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('classitem.detail');
    }

    public function detail(){
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classitem  $classitem
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('classitem.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassitemRequest  $request
     * @param  \App\Models\Classitem  $classitem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassitemRequest $request, Classitem $classitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classitem  $classitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classitem $classitem)
    {
        //
    }
}
