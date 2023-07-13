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
                            <li class="breadcrumb-item active " aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row  px-3">
        <div class="col-md-12">
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




                    <div class="text-center my-3">
                        <a href="{{ route('student.index') }}" class="btn btn-secondary">Cancel</a>
                        <a href=" " class="btn btn-primary">Update</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
