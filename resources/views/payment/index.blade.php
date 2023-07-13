@section('custom')
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endsection
@extends('layout.template')

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

            <div class="col-3 ">
                <!-- Button trigger modal -->
                    <div class="mx-auto">
                        <div class="input-group">
                            <input class="form-control border-end-0 border" type="search" value="" id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Payment For Web Foundation (Batch 01)</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Student Name - Kyaw Kyaw</h6>

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr style="border-bottom: 2px solid black">
                                        <th scope="col-3">Transfer Date</th>
                                        <th scope="col-3">Fees</th>
                                        <th scope="col-3">Paid</th>
                                        <th scope="col-3">Type</th>              
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-3">01-01-2023</td>
                                        <td class="col-3">Class A</td>
                                        <td class="col-3">Python</td>
                                        <td class="col-3">Kyaw Kyaw</td>
                                    </tr>
                                    <tr>
                                        <td class="col-3">01-01-2023</td>
                                        <td class="col-3">Class A</td>
                                        <td class="col-3">Python</td>
                                        <td class="col-3">Kyaw Kyaw</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mt-3 mb-3">
                                        <label for="amount mb-0"> <p class="small-header mb-0">Amount</p></label>
                                        <input type="text" class="form-control w-75" id="amount" placeholder="Enter Amount">                            
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mt-3 mb-3">
                                        <label for="">Type</label>
                                        <div class="input-group w-75">
                                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
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
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                </div>
                                <div>
                                    <label class="form-check-label mb-0" for="flexRadioDefault1">
                                        <p class="small-header mb-0" style="padding-top: 3px;">Print out the slip</p>
                                    </label>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Play</button>
                        </div>

                    </div>
                    </div>
                </div>
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
                                <th scope="col-2">Date</th>
                                <th scope="col-2">Class</th>
                                <th scope="col-2">Course</th>
                                <th scope="col-2">Student</th>
                                <th scope="col-2">Payment Type</th>
                                <th scope="col-1">Fees</th>
                                <th scope="col-1">Due amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <td class="col-2">01-01-2023</td>
                                <td class="col-2">Class A</td>
                                <td class="col-2">Python</td>
                                <td class="col-2">Kyaw Kyaw</td>
                                <td class="col-2">
                                    <div class="pay-status bg-success paystatus-div d-flex justify-content-center align-items-center">
                                        <h6 class="">paid</h6>
                                    </div>
                                </td>
                                <td>150000</td>
                                <td>50000</td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <td>01-01-2023</td>
                                <td>Class A</td>
                                <td>Python</td>
                                <td>Kyaw Kyaw</td>
                                <td>
                                    <div class="pay-status bg-danger paystatus-div d-flex justify-content-center align-items-center">
                                        <h6 class="">unpaid</h6>
                                    </div>
                                </td>
                                <td class="col-1">150000</td>
                                <td class="col-1">50000</td>
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
