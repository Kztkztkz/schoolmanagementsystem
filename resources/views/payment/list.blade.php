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

            <div class="col-4 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Payment For Web Foundation (Batch 01)</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
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

                            <tr>
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
                            <tr>
                                <td>01-01-2023</td>
                                <td>Class A</td>
                                <td>Python</td>
                                <td>Kyaw Kyaw</td>
                                <td>
                                    <div class="pay-status bg-danger paystatus-div d-flex justify-content-center align-items-center">
                                        <h6 class="">paid</h6>
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
