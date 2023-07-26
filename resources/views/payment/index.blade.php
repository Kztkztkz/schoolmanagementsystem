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

            <div class="col-lg-3 col-md-3 col-sm-12 ">
                <!-- Button trigger modal -->
                    <div class="mx-auto">
                        <div class="input-group">
                            <input class="form-control border-end-0 border" placeholder="search payment" type="search" value="" id="example-search-input ">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end me-3 mb-3 d-xs-block d-md-none filter-btn">
        <button type="button" class="btn table-btn-sm btn-primary border border-0 d-flex "  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="mdi mdi-file-find h3 mb-0"></i>
        </button>
    </div>





    <div class="row  px-3 max-height">

        {{-- <div class="col-9 col-sm-12"> --}}
        <div class=" col-sm-12 col-md-9 table-container">
            <div class="card rounded-3 " >
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0 fw-bolder">Total - 10</p>
                    </div>
                    <div class=" table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr style="border-bottom: 2px solid black">
                                    {{-- Mobile View --}}
                                    <th scope="col-4" class="d-table-cell d-lg-none">Date</th>
                                    {{-- Mobile View --}}


                                    <th scope="col-2" class="d-none d-lg-table-cell">Date</th>
                                    <th scope="col-2">Class</th>
                                    <th scope="col-2" class="d-none d-lg-table-cell">Course</th>
                                    <th scope="col-2" class="d-none d-lg-table-cell">Student</th>
                                    <th scope="col-1">Fees</th>
                                    <th scope="col-1">Due amount</th>
                                    <th scope="col-2 " class=" text-end">Payment Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                                     {{-- Mobile View --}}
                                     <td class="col-2 d-table-cell d-lg-none text-nowrap">
                                        <p>01-01-2023</p>
                                        <p>Kyaw Kyaw</p>
                                    </td>
                                     {{-- Laptop View --}}
                                    <td scope="col-2" class="d-none d-lg-table-cell">01-01-2023</td>
                                    <td class="col-2">Class A</td>
                                    <td class="col-2 d-none d-lg-table-cell">Python</td>
                                    <td scope="col-2" class="d-none d-lg-table-cell">Kyaw Kyaw</td>
                                    <td>150000</td>
                                    <td>50000</td>
                                    <td class="d-flex justify-content-end">
                                        <div class=" pay-status bg-success  d-flex justify-content-center me-3 align-items-center rounded" >
                                            <h6 class="" style="margin:3px;">paid</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    {{-- Mobile View --}}
                                    <td class="col-2 d-table-cell d-lg-none">01-01-2023<br>Kyaw Kyaw</br></td>
                                    {{-- Mobile View --}}
                                   <td scope="col-2" class="d-none d-lg-table-cell">01-01-2023</td>
                                   <td class="col-2">Class A</td>
                                   <td class="col-2 d-none d-lg-table-cell">Python</td>
                                   <td scope="col-2" class="d-none d-lg-table-cell">Kyaw Kyaw</td>
                                   <td>150000</td>
                                   <td>50000</td>
                                   <td class="d-flex justify-content-end">
                                       <div class="pay-status bg-danger paystatus-div d-flex justify-content-center align-items-center" style=" border-radius:2px;">
                                           <h6 class="" style="margin:3px;">Unpaid</h6>
                                       </div>
                                   </td>
                               </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-3 d-none d-md-block" id="exampleModal2">
            <div class="card" style="height: 100%">
                <div class="card-body position-relative filter-card">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <i class="mdi mdi-file-find h3 me-1"></i>
                        <p class="  fs-4 mb-2 text-center">Payment Filter</p>
                    </div>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
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
                            <td class="col-3">Cash</td>
                        </tr>
                        <tr>
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
                <div class="text-center mt-5">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Play</button>
                </div>
            </div>
        </div>
        </div>
    </div>

    {{-- Modal for right side bar --}}
    <div class="modal fade" id="staticBackdrop"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Class Filter</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body  position-relative">
            <form action="">
                <div class=" mb-3">
                  <label for="">Student</label>
                  <select class="select2  form-select shadow-none" style="width: 100%; height:36px;">
                    <option>Select Student</option>
                    <option value="CA">David</option>
                    <option value="NV">Steven</option>
                    <option value="OR">Michael</option>
                    <option value="WA">Earthshaker</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="">Course</label>
                  <select class="select2  form-select shadow-none">
                    <option>Select Course</option>
                    <option value="CA">Html</option>
                    <option value="NV">Css</option>
                    <option value="OR">Php</option>
                    <option value="WA">Laravel</option>
                  </select>
                </div>
                <div class="mb-3">
                    <label for="">Class</label>
                    <select class="select2  form-select shadow-none">
                      <option>Select Class</option>
                      <option value="CA">Basic</option>
                      <option value="NV">Intermediate</option>
                      <option value="OR">Advance</option>
                      <option value="WA">Washington</option>
                    </select>
                  </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endpush
