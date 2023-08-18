<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Classitem;
use App\Models\Course;
use App\Models\Payment;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $classitems = Classitem::all();
        $courses = Course::all();
        $totalStudents = Student::all()->count();
        $searchByClass = Classitem::where('id' , request('studentByClass'))->get();

        $students = Student::query();
        $studentByClass = $request->studentByClass;
        $studentByCourse = $request->studentByCourse;



        if(request()->has('studentByCourse') || request()->has('studentByClass')){

            $students = $students->whereHas('classitems' , function($query){
                $query->where("classitems.id" , request('studentByClass'));
            })->whereHas('classitems' , function($query){
                $query->where('course_id' , request('studentByCourse'));
            })->when( request("keyword") , function ($query){
                $keyword = request('keyword');
                $query->where("name" , "like",  "%$keyword%")->where("name" , "like" , "%$keyword%")
                ->orWhere( "email" , "like" , "%$keyword%");
            })
            ->paginate(8);


        }

        else if (request('keyword')){


            $students = $students->when( request("keyword") , function ($query){
                $keyword = request('keyword');
                $query->where("name" , "like",  "%$keyword%")->where("name" , "like" , "%$keyword%")
                ->orWhere( "email" , "like" , "%$keyword%");
            })->whereHas('classitems' , function($query){

                $query->where("classitems.id" , request('studentByClass'));
            })->whereHas('classitems' , function($query){
                $query->where('course_id' , request('studentByCourse'));
            })
            ->paginate(8);

        }
        else{
            $students = Student::latest()->paginate(8);
        }

        return view('students.index' , compact('students' , 'totalStudents' , 'classitems' , 'courses' , 'searchByClass'))->with('message' , 'Students create successful');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classitem::all();
        $courses = Course::all();
        return view('students.create' , compact('classes' , 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {


        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->save();


        if($request->classitem_id > -1 ){

        $currentStudentPayment = Payment::where('student_id' , $request->student_id)->orderBy('id', 'DESC')->first();


            $classitem = Classitem::find(request('classitem_id'));
            $classitemPrice = $classitem->price;
            $due_amount = (int) $classitemPrice - (int) request('due_amount');
            if($currentStudentPayment !== null){
                $currentStudentLastPayment = $currentStudentPayment->due_amount;
                $due_amount = (int) $currentStudentLastPayment - (int) request('due_amount');
            }else{
                $due_amount = (int) $classitemPrice - (int) request('due_amount');
            }

            $payment = new Payment();
            $payment->fees = $classitemPrice;
            $payment->due_amount = $due_amount;
            $payment->classitem_id = $request->classitem_id;
            $payment->student_id = $student->id;
            if(request('due_amount') > $due_amount || request('due_amount') > $classitemPrice){
                return redirect()->route('classitem.show' , $classitem->id )->with('message', 'This amount is exceeded');
             }else{
                 $payment->due_amount = $due_amount;
             }
            $payment_type = ( $due_amount === 0 ) ? 'paid' : 'unpaid';
            $payment->payment_type = $payment_type;
            $payment->payment_method = $request->payment_method;
            $payment->save();
            $student->classitems()->attach($request->classitem_id);

        }

        return redirect()->route('student.index')->with('message' , 'Student created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit( Student $student)
    {

        return view('students.edit' , compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->phone = $student->phone;
        $student->update();

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('del' , 'Student delete successfully');
    }

    public function relatedClass(Student $student){
        $studentoption = Student::all();
        $courseoption = Course::all();
        $classitems = $student->classitems;
        $selectedStudent = $student;

        return view('students.class-student' , compact('classitems' , 'studentoption' , 'courseoption' , 'selectedStudent'));
    }

    public function relatedPayment(Student $student){


        $payments = $student->payments()->whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                  ->from('payments')
                  ->groupBy('classitem_id', 'student_id');
        })->paginate(10);
        $studentoption = Student::all();
        $courseoption = Course::all();
        $classitems = Classitem::all();
        $selectedStudent = $student;

        return view('students.payment-student' , compact(['classitems' , 'studentoption' , 'courseoption' ,'selectedStudent' , 'payments']));
    }
}
