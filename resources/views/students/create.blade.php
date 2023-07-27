@extends('layout.template')

@section('custom')
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">
@endsection

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex ">

                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Students</a></li>
                            <li class="breadcrumb-item active " aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row  px-3 max-height">
        <div class="col-md-12 table-container">
            <div class="card rounded-3 " style="height: 600px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="name">Address</label>
                                <textarea name="" class="form-control form-text" id="address" cols="30" rows="5"
                                    placeholder="Address"></textarea>
                                {{-- <input type="text" class="form-control" id="name" placeholder="Address"> --}}
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="startdate">Email</label>
                                <input type="email" class="form-control" id="enddate" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="number" class="form-control" id="name" placeholder="Phone number">
                            </div>
                        </div>
                    </div>

                    <p class=" h4 my-2">Enrollment (Optional)</p>

                    <div class="row pt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="course">Course Name</label>
                                <select class="form-select slectopt" id="course">
                                    <option selected>Select course name</option>
                                    <option value="1">Web Development</option>
                                    <option value="2">Japanese N5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" class="form-control" id="amount" placeholder="Amount">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="class">Class</label>
                                <select class="form-select slectopt" id="class">
                                    <option selected>Select class</option>
                                    <option value="1">Web Development</option>
                                    <option value="2">Japanese N5</option>
                                </select>
                            </div>
                            <div class="form-group mt-5">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" checked>
                                <label class="form-check-label mb-0" for="flexRadioDefault1">
                                    <p class="small-header mb-0">Print out the slip</p>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class=" text-center form-create-btn ">
                        <a href="{{ route('student.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        <a href="" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
