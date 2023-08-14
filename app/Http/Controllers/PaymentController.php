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
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // $classitemId = ClassitemStudent::pluck('classitem_id');
        // $studentId = ClassitemStudent::pluck('student_id');
        // $payments = Payment::where('student_id' , 22)->get();
        // return $payments;
        // $students  = Student::all();
        // $classitemId = Student::pluck('classitem_id');
        // return $classitemId;

        // $distinct= Payment::orderBy('id' , 'desc')->get()->unique('classitem_id' , 'student_id');


        // // return $studentId;

        // foreach($distinct as $value){

        //     echo "<pre>";
        //     echo $value;
        //     echo "</pre>";
        // //    $paymentsByStudent = Payment::where('student_id' , $value )->get();
        // //    array_push($payments , $paymentsByStudent);




        // }


        $payments = Payment::all();
        $latestPayments = Payment::whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                  ->from('payments')
                  ->groupBy('classitem_id', 'student_id');
        })->paginate(7);

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



        return view('payment.index',compact('latestPayments' , 'total' , 'payments'));

        // 27.7.23

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
        $payment->due_amount = $due_amount;
        $payment->classitem_id = $request->classitem_id;
        $payment->student_id = $request->student_id;

        $payment_type = ( $due_amount === 0 ) ? 'paid' : 'unpaid';
        $payment->payment_type = $payment_type;
        $payment->payment_method = $request->payment_method;
        $payment->save();

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

}
