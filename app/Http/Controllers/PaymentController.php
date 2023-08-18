<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use PhpParser\Builder\Class_;

use App\Models\Course;
use App\Models\Classitem;
use App\Models\ClassitemStudent;
use App\Models\Student;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Illuminate\Http\Request as HttpRequest;



class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(  )
    {



        $classitems = Classitem::all();
        $courses = Course::all();
        $students = Student::all();
        $payments = Payment::all();


        $latestPayments = Payment::whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                  ->from('payments')
                  ->groupBy('classitem_id', 'student_id');
        })->paginate(10);

        $totalPayment =  Payment::whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                  ->from('payments')
                  ->groupBy('classitem_id', 'student_id');
        })->get();

        $total = count($totalPayment);

        // return $latestPayments;

        // foreach ($latestPayments as $payment) {
        //     $classId = $payment->class_id;
        //     $studentId = $payment->student_id;

        //     echo "<pre>";
        //     echo $payment ;
        //     echo "</pre>";
        // }


        // return count($payments);



        return view('payment.index',compact('latestPayments' , 'total' , 'payments' , 'classitems' , 'courses' , 'students'));

        // 27.7.23

    }

    public function getPayments(Request $request)
    {
        $payments = Payment::where('student_id', $request->studentId)->where('classitem_id', $request->classitemId)->with('student')->get();
        return response()->json($payments);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {


        // $currentStudentId = Payment::where('student_id' , $request->student_id)->orderBy('id', 'DESC')->first()->student_id;

        $currentStudentPayment = Payment::where('student_id' , $request->student_id)->orderBy('id', 'DESC')->first();


        $classitem = Classitem::find(request('classitem_id'));
        $classitemPrice = $classitem->price;

        if($currentStudentPayment !== null){
            $currentStudentLastPayment = $currentStudentPayment->due_amount;
            $due_amount = (int) $currentStudentLastPayment - (int) request('due_amount');
        }else{
            $due_amount = (int) $classitemPrice - (int) request('due_amount');
        }



        $payment = new Payment();
        $payment->fees = $classitemPrice;

        $payment->classitem_id = $request->classitem_id;
        $payment->student_id = $request->student_id;
        if(request('due_amount') > $due_amount || request('due_amount') > $classitemPrice){
           return redirect()->route('classitem.show' , $classitem->id )->with('message', 'This amount is exceeded');
        }else{
            $payment->due_amount = $due_amount;
        }
        $payment_type = ( $due_amount === 0 ) ? 'paid' : 'unpaid';
        $payment->payment_type = $payment_type;
        $payment->payment_method = $request->payment_method;
        $payment->save();


        $stuCla = ClassitemStudent::where('student_id' , $request->student_id)->where('classitem_id' , $request->classitem_id )->get();
        if($stuCla == ''){
            $studentClass = new ClassitemStudent();
            $studentClass->student_id = $request->student_id;
            $studentClass->classitem_id = $request->classitem_id;
            $studentClass->save();
        }

        return redirect()->route('payment.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("payment.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function classdetail(Request $request){

        return $request;
        // return $request->studentname;
    }


    public function paymentFromModal (Request $request){
        $classitem = Classitem::find(request('classitem_id'));
        $classitemPrice = $classitem->price;
        $currentStudentPayment = Payment::where('student_id' , $request->student_id)->orderBy('id', 'DESC')->first();


        if($currentStudentPayment !== null){
            $currentStudentLastPayment = $currentStudentPayment->due_amount;
            $due_amount = (int) $currentStudentLastPayment - (int) request('due_amount');
        }else{
            $due_amount = (int) $classitemPrice - (int) request('due_amount');
        }

        // return $due_amount;

        $payment = new Payment();
        $payment->fees = $classitemPrice;

        $payment->classitem_id = $request->classitem_id;
        $payment->student_id = $request->student_id;
        if(request('due_amount') > $due_amount || request('due_amount') > $classitemPrice){
           return redirect()->route('payment.index' )->with('message', 'This amount is exceeded');
        }else{
            $payment->due_amount = $due_amount;
        }
        $payment_type = ( $due_amount === 0 ) ? 'paid' : 'unpaid';
        $payment->payment_type = $payment_type;
        $payment->payment_method = $request->payment_method;
        $payment->save();

        return redirect()->route('payment.index');
    }



    public function allPaymentHistory(HttpRequest $request){


        $paymentHistory = Student::find($request->student_id)->payments;
        $paymentHistory =  $paymentHistory->where('classitem_id' , 1);
        return view('students.pay-history-student' , compact('paymentHistory'));
    }






}
