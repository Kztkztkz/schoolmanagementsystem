<?php

namespace App\Http\Controllers;

use App\Models\Classitem; 
use App\Models\Room;
use App\Models\Course;
use App\Models\User;
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
    public function index(Request $request)
    {
        
        $studentoption = Student::all();
        $courseoption = Course::all();
        $users = User::all();
        if($request->has('coursesearchclassitem') || $request->has('studentsearchclassitem')){
            $classitem = Classitem::where('course_id', $request->coursesearchclassitem)
            ->orWhereHas('students', function ($query) use ($request) {
                $query->where('students.id', $request->studentsearchclassitem);
            })
            ->paginate(7)->withQueryString();
        }

        else if($request->has('classitemsearch')){
            $classitem = Classitem::where('name', 'like', '%' . $request->classitemsearch . '%')
            ->orWhereHas('course', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->classitemsearch . '%');
            })
            ->orWhereHas('users', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->classitemsearch . '%');
            })
            ->paginate(7)->withQueryString();
        }

        else {
            $classitem =  Classitem::orderBy('id', 'desc')->paginate(7);
        }

        return view('classitem.index', compact(['classitem','courseoption','studentoption']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Classitem::class);
        $roomoption = Room::all();
        $courseoption = Course::all();
        $lectureroption =  User::where('role_id', 2)->get();
        return view('classitem.create',compact(['roomoption','courseoption','lectureroption']));
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
        $lecturerIds = $request->lecturer;

        $classitemId = Classitem::create([
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
        $classitemId->users()->attach($lecturerIds); 

        // $noty = new Noty('success');
        // $noty->setTitle('Success');
        // $noty->setMessage('Your file has been uploaded successfully.');
        // $noty->show();

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
        $lectureroption =  User::where('role_id', 2)->get();
        return view('classitem.edit',compact(['classitem','courseoption','roomoption','lectureroption']));
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
        $this->authorize('update', $classitem);
        $days = $request->days;
        $day_string = implode(', ', $days);
        $lecturerIds = $request->lecturer;

        $classitemId = $classitem->update([
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

        $classitemId->users()->attach($lecturerIds);

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
        $this->authorize('delete', $classitem);
        $classitem->delete();
        return redirect()->route('classitem.index')->with('del', 'Data is deleted');
    }

    public function classPayment(Classitem $classitem)
    {
        $payments = $classitem->payments()->get();
        $studentoption = Student::all();
        $courseoption = Course::all();
        $classitems = Classitem::all();
        $selectedStudent = $classitem;

        return view('classitem.classpayment' , compact(['classitems' , 'studentoption' , 'courseoption' ,'selectedStudent' , 'payments']));
    }
}