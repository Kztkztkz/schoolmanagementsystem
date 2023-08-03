<?php

namespace App\Http\Controllers;

use App\Models\Classitem;
use App\Models\Room;
use App\Models\Course;
use App\Http\Requests\StoreClassitemRequest;
use App\Http\Requests\UpdateClassitemRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClassitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classitem = Classitem::all();
        return view('classitem.index', compact('classitem'));
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
        $day_string = implode(', ', $days);

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
            'code' => $request->shortcode,
        ]);

       return redirect()->back()->with('message','Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classitem  $classitem
     * @return \Illuminate\Http\Response
     */
    public function show(Classitem $classitem)
    {
        $students = Student::all();
        return view('classitem.detail', compact('classitem','students'));
    }

    public function detail(){
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classitem  $classitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Classitem $classitem)
    {
        $roomoption = Room::all();
        $courseoption = Course::all();
        return view('classitem.edit',compact(['classitem','courseoption','roomoption']));
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
        $days = $request->days;
        $day_string = implode(', ', $days);


        $classitem->update([
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
            'code' => $request->shortcode,
        ]);

        return redirect()->route('classitem.index')->with('message', 'Data updated successfully');
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
