

@extends('layout.template')
@section('custom')
    <style>
        @media screen and (max-width:460px) {
            #main-wrapper {
                position: fixed !important;
            }

            .max-height {
                padding-bottom: 75px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endsection
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-9">
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Payment</a></li>
                            <li class="breadcrumb-item active " aria-current="page">List</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 ">
                <!-- Button trigger modal -->
                <div class="mx-auto">
                    <div class="input-group">
                        <input class="form-control border-end-0 border" placeholder="search payment" type="search"
                            value="" id="example-search-input ">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5"
                                type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="row  px-3 max-height">

        {{-- <div class="col-9 col-sm-12"> --}}
        <div class=" col-sm-12 col-md-9 table-container">
            <div class="card rounded-3 ">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2 mb-lg-0">
                        <p class="mb-0 fw-bolder">Total - {{$latestPayments->total()}}</p>
                        <div class="d-flex justify-content-end  d-xs-block d-md-none ">
                            <button type="button" class="btn plus-btn btn-outline-secondary d-flex " data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                <i class="mdi mdi-filter-outline h5 mb-0"></i>
                            </button>
                        </div>
                    </div>
                    <div class=" table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr style="border-bottom: 2px solid black">
                                    {{-- Mobile View --}}
                                    {{-- <th scope="col" class="d-table-cell d-lg-none">Date</th> --}}
                                    {{-- Mobile View --}}


                                    <th scope="col" class="d-lg-table-cell list-date-col">Date</th>
                                    <th scope="col" class=" list-class-col">Class</th>
                                    <th scope="col" class="d-none d-lg-table-cell list-course-col">Course</th>
                                    <th scope="col" class="d-none d-lg-table-cell list-student-col">Student</th>
                                    <th scope="col" class=" list-fees-col">Fees</th>
                                    <th scope="col" class=" list-due-col">Due</th>
                                    <th scope="col" class=" text-center list-type-col">Type</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($latestPayments as $payment)

                                <tr onclick="showPayments({{ $payment->classitem_id }}, {{ $payment->student_id }})" class="history" data-className="{{$payment->classitem->name}}" data-studentName="{{$payment->student->name}}" data-bs-toggle="modal" data-bs-target="#exampleModal">



                                    {{-- Mobile View --}}
                                    <td class="d-table-cell d-lg-none text-nowrap align-middle">
                                        {{-- <p>01-01-2023</p> --}}
                                        <p>{{$payment->created_at}}</p>
                                        <p> {{$payment->student->name}}</p>
                                    </td>
                                    <td class="relatedStudent d-none">
                                         {{$payment->student->id}}
                                    </td>
                                    <td class="relatedClass d-none">
                                        {{$payment->classitem->id}}
                                   </td>

                                    {{-- Laptop View --}}
                                    <td class="d-none d-lg-table-cell align-middle">{{$payment->created_at->format('d-m-Y')}}</td>
                                    <td class="align-middle">{{Str::limit($payment->classitem->name, 20)}} </td>
                                    <td class="d-none d-lg-table-cell align-middle">
                                        {{Str::limit($payment->classitem->course->name, 15)}}</td>
                                    <td class="d-none d-lg-table-cell align-middle">
                                        {{Str::limit($payment->student->name, 15)}}</td>
                                    <td class=" align-middle">{{number_format(floatval($payment->fees))}}</td>
                                    <td class=" align-middle">{{number_format(floatval($payment->due_amount))}}</td>
                                    <td class=" align-middle">

                                        @if ($payment->payment_type=="paid")
                                            <div class="bg-success pay-status d-flex justify-content-center align-items-center rounded">
                                                paid
                                            </div>
                                        @else
                                            <div class="bg-danger pay-status d-flex justify-content-center align-items-center rounded">
                                                unpaid
                                            </div>
                                        @endif

                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <div class=" paginate ">
                            {{ $latestPayments->links('pagination::bootstrap-4')}}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-3 d-none d-md-block" >
            <div class="card" style="height: 100%">
                <div class="card-body position-relative filter-card">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <i class="mdi mdi-filter-outline h3 me-1"></i>
                        <p class="  fs-4 mb-2 text-center">Payment Filter</p>
                    </div>
                    <form action="">
                        <div class=" mb-3">
                            <label for="">Student</label>
                            <select class="select2  form-select shadow-none js-example-basic-single"  name="student_id" style="width: 100%; height:36px;">
                                <option>Select Student</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=" mb-3">
                            <label for="">Course</label>
                            <select id="courseId" class="select2  form-select shadow-none courseId" style="width: 100%; height:36px;" name="studentByCourse">
                                <option value = "-1">Select Course</option>
                                {{-- @foreach($courses as $course)
                                    <option value="{{$course->id}}" {{ $course->id == request('studentByCourse') ? 'selected' : '' }}>
                                        {{$course->name}}
                                    </option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Class</label>
                            <select id="classId" required class="select2  form-select shadow-none classId" style="width: 100%; height:36px;" name="studentByClass">
                                <option value = "-1">Select Class</option>
                                {{-- @foreach($classitems as $class)
                                    <option value="{{$class->id}}" {{ $class->id == request('studentByClass') ? 'selected' : '' }} >
                                        {{$class->name}}
                                    </option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="position-absolute filterbtn">
                                <button class="btn btn-secondary cnl-btn me-2" type="submit">Cancel</button>
                                <button class="btn btn-primary sub-btn " type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Modal -->
    {{-- <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="mymodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="mymodal">Payment For Web Foundation (Batch 01)</h1>

   @foreach ($latestPayments as $payment)





         <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$payment->id}}" tabindex="-1" aria-labelledby="exampleModal{{$payment->id}}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModal{{$payment->id}}Label">{{$payment->classitem->name}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Student Name - <span id="modalStudentName"></span></h6>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr style="border-bottom: 2px solid black">
                                <th scope="col">Transfer Date</th>
                                <th scope="col">Fees</th>
                                <th scope="col">Paid</th>
                                <th scope="col">Type</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ({{$payment->student->name}} as $student)

                            <tr>
                                <td class="col-3">01-01-2023</td>
                                <td class="col-3">Class A</td>
                                <td class="col-3">Python</td>
                                <td class="col-3">Cash</td>
                            </tr>
                            @endforeach
                            <tr>

                        <tbody class="payHistory">


                            {{-- @endforeach --}}
                            {{-- <tr>

                                <td class="col-3">01-01-2023</td>
                                <td class="col-3">Class A</td>
                                <td class="col-3">Python</td>
                                <td class="col-3">Debit Card</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-6">
                            <div class="mt-3 mb-3">
                                <label for="amount mb-0">
                                    <p class="small-header mb-0">Amount</p>
                                </label>
                                <input type="text" class="form-control w-75" id="amount"
                                    placeholder="Enter Amount">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mt-3 mb-3">
                                <label for="">Type</label>
                                <div class="input-group w-75">
                                    <select class="form-select" id="inputGroupSelect04"
                                        aria-label="Example select with button addon">
                                        <option selected>Choose Type</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 d-flex">
                        <div class="" style="margin-right: 10px;">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1" checked>
                        </div>
                        <div>
                            <label class="form-check-label mb-0" for="flexRadioDefault1">
                                <p class="small-header mb-0" style="padding-top: 3px;">Print out the slip</p>
                            </label>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Play</button>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}

    <div class="modal fade hide" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('payments.createModal')}}" method="POST">
            <div class="modal-body">

                <h3 class="studentName"></h3>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr style="border-bottom: 2px solid black">
                            <th scope="col">Transfer Date</th>
                            <th scope="col">Fees</th>
                            <th scope="col">Paid</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody class="payHistory">


                        {{-- @endforeach --}}
                        {{-- <tr>
                            <td class="col-3">01-01-2023</td>
                            <td class="col-3">Class A</td>
                            <td class="col-3">Python</td>
                            <td class="col-3">Debit Card</td>
                        </tr> --}}
                    </tbody>
                </table>

                @csrf
                <input type="text" class="d-none" name="student_id" hidden id="curStudentId" value="">
                <input type="text" class="d-none" name="classitem_id" hidden id="curClassId" value="">
                <div class="row">
                    <div class="col-6">
                        <div class="mt-3 mb-3">
                            <label for="amount mb-0">
                                <p class="small-header mb-0">Amount</p>
                            </label>
                            <input type="text" class="form-control w-75" name="due_amount"
                                placeholder="Enter Amount">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mt-3 mb-3">
                            <label for="">Payment Method</label>
                            <div class="input-group w-75">
                                <select name="payment_method"
                                    class="form-select slectopt" id="class">
                                    <option value="cash">Cash</option>
                                    <option value="card">Card</option>
                                    <option value="bank transfer">Bank Transfer</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mb-3 d-flex">
                    <div class="form-group margin-right mt-5">
                        <input name="slip" class=" form-check-input" type="checkbox" name="flexRadioDefault"
                            id="flexRadioDefault1">
                        <label class="form-check-label mb-0" for="flexRadioDefault1">
                            <p class="small-header mb-0">Print out the slip</p>
                        </label>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Pay</button>
                </div>


            </div>
        </form>
          </div>
        </div>
      </div>



    </div>
   @endforeach


    {{-- Modal for right side bar --}}
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Payment Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body  position-relative">

                        <div class=" mb-3">
                            <label for="">Student</label>
                            <select class="select2  form-select shadow-none js-example-basic-single" class="" name="paymentByStudent" style="width: 100%; height:36px;">
                                <option>Select Student</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class=" mb-3">
                            <label for="">Course</label>
                            <select id="courseId" class="select2  form-select shadow-none courseId" style="width: 100%; height:36px;" name="paymentByCourse">
                                <option value = "-1">Select Course</option>
                                {{-- @foreach($courses as $course)
                                    <option value="{{$course->id}}" {{ $course->id == request('studentByCourse') ? 'selected' : '' }}>
                                        {{$course->name}}
                                    </option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Class</label>
                            <select id="classId" required class="select2  form-select shadow-none classId" style="width: 100%; height:36px;" name="PaymentByCourse">
                                <option value = "-1">Select Class</option>
                                {{-- @foreach($classitems as $class)
                                    <option value="{{$class->id}}" {{ $class->id == request('studentByClass') ? 'selected' : '' }} >
                                        {{$class->name}}
                                    </option>
                                @endforeach --}}
                            </select>
                        </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    <script>

        let className;
        let studentName;
            $('.history').map(function(){
                    $(this).on('click', function(){
                    className = $(this).attr('data-className');
                    studentName = $(this).attr('data-studentName');
                console.log(className , studentName);
                });
            });


            // Function to show the Bootstrap modal
            function showModal(response){
                $('#exampleModalLabel').text(className);
                $('.studentName').text(studentName);
                response.map(function(el){
                    console.log(el);
                    $('.payHistory').append(`
                        <tr>
                            <td class="col-3">${el.created_at}</td>
                            <td class="col-3">${el.fees}</td>
                            <td class="col-3">${el.due_amount}</td>
                            <td class="col-3">${el.payment_method}</td>
                        </tr>

                    `);
                });
                $('#exampleModal').modal('show');
            };


        var ENDPOINT = "{{ route('classitem.index') }}";









        function showPayments(classitemId, studentId ) {


            $('#curStudentId').val(studentId);
            $('#curClassId').val(classitemId);

            console.log(classitemId, studentId);
            $.ajax({
                url: "{{ route('payments.get') }}?classitemId="+classitemId+"&studentId="+studentId,
                type: "get",
            })
            .done(function (response) {
                showModal(response);



            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });

            $('.payHistory').empty();
            className = '';
            studentName = '';


            // console.log(allHistory);
        }




        let payments =  {!! json_encode($payments->toArray())  !!} ;



        $('.pay-row').map(function(){
            $(this).on('click' , function(){
            let studentId = $(this).children('.relatedStudent').text();
            let classitemId = $(this).children('.relatedClass').text();

            let studentPay = payments.filter( el => el.student_id == studentId );
            console.log(studentPay);

            studentPay.forEach(el => {
                $('.payHistory').map(function(){
                    $(this).append(`
                        <tr>
                            <td class="col-3">${el.created_at}</td>
                            <td class="col-3">${el.fees}</td>
                            <td class="col-3">${el.due_amount}</td>
                            <td class="col-3">${el.payment_method}</td>
                        </tr>

                    `);
                });
            });

            console.log(studentId , classitemId);
            });
        });



        let courseId = [];
        let classId = [];
        let requestCourseId =  @php
            if(request('studentByCourse')){
                echo request('studentByCourse');
            }else{
                echo -1;
            }
        @endphp ;


        let courses =  {!! json_encode($courses->toArray())  !!} ;
        courses.forEach(element => {
                 courseId.push(element.id);


                $('.courseId').map(function (el) {
                    $(this).append(`
                        <option  value="${element.id}" ${ element.id == requestCourseId ? 'selected' : '' }>
                            ${element.name}
                        </option>
                    `);
                });

        });


        let classes =  {!! json_encode($classitems->toArray())  !!} ;
        let requestClassId =  @php
            if(request('studentByClass')){
                echo request('studentByClass');
            }else{
                echo -1;
            }
        @endphp ;


        classes.forEach(element => {

               classId.push(element.course_id);
               $('.classId').map(function (el) {
                    $(this).append(`
                        <option value="${element.id}" data-course="${element.course_id}" ${ element.id == requestClassId ? 'selected' : '' } >
                            ${element.name}
                        </option>
                    `);
               });

        });



        $('.courseId').map(function (el) {

            $(this).on('change' , function () {
                let currentCourseId = $(this).val();
                console.log(currentCourseId);
                $("#classId option").hide();
                $(`[data-course=${currentCourseId}]`).show();
            });

        });

    </script>
@endpush
