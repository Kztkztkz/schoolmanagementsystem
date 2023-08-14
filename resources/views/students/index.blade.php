@extends('layout.template')

@section('custom')
    <style>
        @media screen and (max-width:460px) {
            #main-wrapper {
                height: 100vmax;
                overflow: visible;
            }

            .max-height {
                padding-bottom: 10px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">
@endsection

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class=" col-12 col-md-9 d-flex ">
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="{{ route('student.index') }}">Students</a></li>
                            <li class="breadcrumb-item active " aria-current="page">List</li>
                            {{-- @if (request('studentByClass'))
                                <li class="breadcrumb-item active " aria-current="page">Search by <span
                                        class=" text-primary">{{ $searchByClass }}</span></li>
                            @endif --}}
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="mx-auto">
                    <form action="{{ route('student.index') }}" >
                        <div class="input-group">
                            <input class="form-control border-end-0 border" placeholder="search student" type="search"
                            name="keyword" value="{{ request('keyword') }}" id="example-search-input">
                            @if (request('studentByCourse') || request('studentByClass'))
                            <input hidden name="studentByCourse" value="{{ request('studentByCourse') }}">
                            <input hidden name="studentByClass" value="{{ request('studentByClass') }}">
                            @endif
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary bg-white hover-none border-start-0 border-bottom-0 border ms-n5"
                                    type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row  px-3 max-height">
        <div class="col-12 col-md-9 table-container">
            <div class="card rounded-3 ">
                <div class="card-body">
                    @if(session('message'))
                        <span class=" alert alert-success ">{{ session('message') }}</span>
                    @endif
                    <div class="d-flex justify-content-between align-items-center mb-2 mb-lg-0">
                        <p class="mb-0 fw-bolder">Total - {{ $totalStudents }}</p>
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <a href="{{ route('student.create') }}"
                                class="btn d-flex justify-content-center align-items-center plus-btn btn-outline-secondary ">
                                <i class="mdi mdi-plus h5 mb-0"></i>
                            </a>
                            <div class="d-flex justify-content-end  d-xs-block d-md-none ">
                                <button type="button" class="btn plus-btn btn-outline-secondary d-flex " data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <i class="mdi mdi-filter-outline h5 mb-0"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="student-table">
                        <table class="table table-striped table-hover  student-list mt-1">
                            <thead>
                                <tr style="border-bottom: 2px solid black">
                                    <th class="w-15" scope="col">Name</th>
                                    <th class=" w-25" scope="col">Contact</th>
                                    <th class=" w-30 d-none d-lg-table-cell" scope="col">Address</th>
                                    <th scope="col" class="text-center">Payment</th>
                                    <th scope="col" class="text-center">Class</th>
                                    <th scope="col" class="text-end">
                                        <p class=" d-none d-md-block">Control</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                <tr>
                                    <td scope="row" class="">{{ $student->name }}</td>
                                    <td>
                                        <p class="mb-0 d-block d-md-none"> {{Str::limit($student->email , 15 , '...')}} </p>
                                        <p class="mb-0 d-none d-md-block"> {{$student->email }} </p>
                                        <p class="mb-0 text-black-50">{{ $student->phone}}</p>
                                    </td>
                                    <td class="d-none d-lg-table-cell">
                                        <p> {{ Str::limit($student->address, 50 , '...') }} </p>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="{{ route('student.relatedPayment' , $student->id ) }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-credit-card-multiple h5"></i>
                                        </a>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="{{ route('student.relatedClass' , $student->id ) }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-book-open-page-variant h5"></i>
                                        </a>
                                    </td>
                                    <td class="text-end align-middle text-nowrap">
                                        <div class="d-none d-md-block control-btns">
                                            <a href="{{ route('student.edit', $student->id ) }}" class="btn table-btn-sm btn-primary">
                                                <i class="mdi mdi-pencil h5"></i>
                                            </a>

                                            <form action="{{ route('student.destroy' , $student->id ) }}" class=" d-inline-block" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick=" return confirm('Are you sure to delete?') " class="btn table-btn-sm btn-danger del-btn">
                                                    <i class="mdi mdi-delete h5 text-white"></i>
                                                </button>
                                            </form>


                                        </div>


                                        <div class="btn-group control-btn dropup d-block d-md-none ">
                                            <button type="button"
                                                class="btn table-btn-sm btn-outline-dark border border-0 dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical h4"></i>
                                            </button>

                                            <ul class="dropdown-menu mb-1">
                                                <div class="d-flex ">
                                                    <li>
                                                        <a href="{{ route('student.edit' , $student->id ) }}"
                                                            class="btn table-btn-sm btn-outline-primary border border-0">
                                                            <i class="mdi mdi-pencil h5"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('student.destroy' , $student->id ) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn table-btn-sm btn-outline-danger border border-0">
                                                                <i class="mdi mdi-delete h5 "></i>
                                                            </button>
                                                        </form>

                                                    </li>

                                                </div>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <td colspan="6" class="text-center">No search data</td>
                                @endforelse






                            </tbody>
                        </table>

                        <div class=" paginate ">
                            {{$students->links('pagination::bootstrap-4')}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-3 d-none d-md-block">
            <div class="card ">
                <div class="card-body position-relative filter-card">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <i class="mdi mdi-file-find h3 me-1"></i>
                        <p class="  fs-4 mb-2 text-center">Student Filter</p>
                    </div>

                    <form action="{{route('student.index')}}" method="get">
                        @if (request('keyword') )
                            <input hidden name="keyword" value="{{ request('keyword') }}">
                        @endif
                        <div class=" mb-3">
                            <label for="">Course</label>
                            <select id="courseId" class="select2  form-select shadow-none courseId" style="width: 100%; height:36px;" name="studentByCourse">
                                <option value = "">Select Course</option>
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
                                <option value = "">Select Class</option>
                                {{-- @foreach($classitems as $class)
                                    <option value="{{$class->id}}" {{ $class->id == request('studentByClass') ? 'selected' : '' }} >
                                        {{$class->name}}
                                    </option>
                                @endforeach --}}
                            </select>
                        </div>

                        <div class="d-flex justify-content-center align-items-center ">
                            <div class="filterbtn">
                                <a href="{{route('student.index')}}" class="btn btn-secondary cnl-btn me-2" type="submit">Cancel</a>
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
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Student Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body  position-relative">

                    <form action="{{route('student.index')}}" method="get">
                        @if (request('keyword') )
                            <input hidden name="keyword" value="{{ request('keyword') }}">
                        @endif
                        <div class=" mb-3">
                            <label for="">Course</label>
                            <select id="courseId" class="select2  form-select shadow-none courseId" style="width: 100%; height:36px;" name="studentByCourse">
                                <option value = "">Select Course</option>
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
                                <option value = "">Select Class</option>
                                {{-- @foreach($classitems as $class)
                                    <option value="{{$class->id}}" {{ $class->id == request('studentByClass') ? 'selected' : '' }} >
                                        {{$class->name}}
                                    </option>
                                @endforeach --}}
                            </select>
                        </div>

                        <div class="d-flex justify-content-center align-items-center ">
                            <div class="">
                                <a href="{{route('student.index')}}" class="btn btn-secondary cnl-btn me-2" type="submit">Cancel</a>
                                <button class="btn btn-primary sub-btn " type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>


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
