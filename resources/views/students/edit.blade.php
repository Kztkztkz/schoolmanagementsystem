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

    <div class="row  px-3 max-height">
        <div class="col-md-12 ">
            <div class="card rounded-3 " style="height: 600px">
                <div class="card-body">
                    <form action="{{ route('student.update' , $student->id ) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name' , $student->name)}}" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Address</label>
                                    <textarea name="address" class="form-control form-text" id="address" cols="30" rows="5"
                                        placeholder="Address">{{old('address' ,$student->address)}}</textarea>
                                    {{-- <input type="text" class="form-control" id="name" placeholder="Address"> --}}
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="startdate">Email</label>
                                    <input type="email" class="form-control" name="email" id="enddate" value="{{old('email' ,$student->email)}}" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="name">Phone</label>
                                    <input  value="{{old('phone',$student->phone)}}" name="phone" class="form-control" id="name" placeholder="Phone number">
                                </div>
                            </div>
                        </div>

                        <div class="text-center my-3 create-filterbtn">
                            <a href="{{ route('student.index') }}" class="btn btn-secondary">Cancel</a>
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
