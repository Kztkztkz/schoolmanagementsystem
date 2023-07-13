@section('custom')
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endsection
@extends('layout.template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-8 d-flex ">
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Payment</a></li>
                            <li class="breadcrumb-item active " aria-current="page">List</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="col-4">
                {{-- <div class="search-box">
                    <input type="text" placeholder="Search">
                    <label for="" class="icon">
                        <i class="fas fa-search"></i>
                    </label>
                </div> --}}
                {{-- <div class="input-group top-search">
                    <div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                      </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="row  px-3">
        <div class="col-9">
            <div class="card rounded-3 " style="height: 600px">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0 fw-bolder">Total - 10</p>
                        {{-- <div class="">
                            <a href="" class="btn plus-btn btn-secondary">
                                <i class="mdi mdi-plus h5"></i>
                            </a>
                        </div> --}}
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr style="border-bottom: 2px solid black">
                                <th scope="col">Date</th>
                                <th scope="col">Class</th>
                                <th scope="col">Course</th>
                                <th scope="col">Student</th>
                                <th scope="col">Payment Type</th>
                                <th scope="col">Fees</th>
                                <th scope="col">Due amount</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>01-01-2023</td>
                                <td>Class A</td>
                                <td>Python</td>
                                <td>Kyaw Kyaw</td>
                                <td>
                                    <a href="" class="btn table-btn-sm btn-success">
                                        Paid
                                    </a>
                                </td>
                                <td>150000</td>
                                <td>50000</td>
                            </tr>
                            <tr>
                                <td>01-01-2023</td>
                                <td>Class A</td>
                                <td>Python</td>
                                <td>Kyaw Kyaw</td>
                                <td>
                                    <a href="" class="btn table-btn-sm btn-danger">
                                        Unpaid
                                    </a>
                                </td>
                                <td>150000</td>
                                <td>50000</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="height: 600px">
                <div class="card-body">
                    <p class=" text-center fs-4 mb-2">Payements Filter</p>

                    <form action="">
                        <div class=" mb-3">
                            <label for="">Student</label>
                            <select class="select2  form-select shadow-none" style="width: 100%; height:36px;">
                                <option>Select Student</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Course</label>
                            <select class="select2  form-select shadow-none">
                                <option>Select Course</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="">Class</label>
                            <select class="select2  form-select shadow-none">
                                <option>Select Class</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-secondary me-2" type="submit">Cancel</button>
                            <button class="btn btn-primary " type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
