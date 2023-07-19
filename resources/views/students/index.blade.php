@extends('layout.template')

@section('custom')
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">
@endsection

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class=" col-12 col-md-9 d-flex ">
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Students</a></li>
                            <li class="breadcrumb-item active " aria-current="page">List</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="mx-auto">
                    <div class="input-group">
                        <input class="form-control border-end-0 border" placeholder="search student" type="search" value="" id="example-search-input">
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
    <div class="d-flex justify-content-end me-3 mb-3 d-xs-block d-sm-none">
        <button type="button" class="btn btn-primary d-flex modlbtn" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            Class Filter
        </button>
    </div>

    <div class="row  px-3 max-height">
        <div class="col-12 col-md-9">
            <div class="card rounded-3 ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0 fw-bolder">Total - 10</p>
                        <div class="">
                            <a href="{{ route('student.create') }}" class="btn plus-btn btn-secondary">
                                <i class="mdi mdi-plus h5"></i>
                            </a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table class="table table-striped table-hover  student-table mt-1">
                            <thead>
                                <tr style="border-bottom: 2px solid black">
                                    <th class="w-15" scope="col">Name</th>
                                    <th class=" w-25" scope="col">Contact</th>
                                    <th class=" w-30 " scope="col">Address</th>
                                    <th scope="col">Payment</th>
                                    <th scope="col">Class</th>
                                    <th class="text-end" scope="col">Controls</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Kyaw</td>
                                    <td>
                                        <p class="mb-0">kyaw@email.com</p>
                                        <p class="mb-0">0934355333</p>
                                    </td>
                                    <td>
                                        <p>No.1 Pyay sit amet reprehenderit animi ea?</p>
                                    </td>
                                    <td>
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-credit-card-multiple h5"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-book-open-page-variant h5"></i>
                                        </a>
                                    </td>
                                    <td class=" text-nowrap">
                                        <a href="{{ route('student.edit', 1) }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-pencil h5"></i>
                                        </a>
                                        <a href="" class="btn table-btn-sm btn-danger">
                                            <i class="mdi mdi-delete h5 text-white"></i>
                                        </a>


                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Kyaw</td>
                                    <td>
                                        <p class="mb-0">kyaw@email.com</p>
                                        <p class="mb-0">0934355333</p>
                                    </td>
                                    <td>
                                        <p>No.1 Pyay sit amet reprehenderit animi ea?</p>
                                    </td>
                                    <td>
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-credit-card-multiple h5"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-book-open-page-variant h5"></i>
                                        </a>
                                    </td>
                                    <td class=" ">
                                        <a href="{{ route('student.edit', 1) }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-pencil h5"></i>
                                        </a>
                                        <a href="" class="btn table-btn-sm btn-danger">
                                            <i class="mdi mdi-delete h5 text-white"></i>
                                        </a>


                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Kyaw</td>
                                    <td>
                                        <p class="mb-0">kyaw@email.com</p>
                                        <p class="mb-0">0934355333</p>
                                    </td>
                                    <td>
                                        <p>No.1 Pyay sit amet reprehenderit animi ea?</p>
                                    </td>
                                    <td>
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-credit-card-multiple h5"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-book-open-page-variant h5"></i>
                                        </a>
                                    </td>
                                    <td class=" ">
                                        <a href="{{ route('student.edit', 1) }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-pencil h5"></i>
                                        </a>
                                        <a href="" class="btn table-btn-sm btn-danger">
                                            <i class="mdi mdi-delete h5 text-white"></i>
                                        </a>


                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Kyaw</td>
                                    <td>
                                        <p class="mb-0">kyaw@email.com</p>
                                        <p class="mb-0">0934355333</p>
                                    </td>
                                    <td>
                                        <p>No.1 Pyay sit amet reprehenderit animi ea?</p>
                                    </td>
                                    <td>
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-credit-card-multiple h5"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-book-open-page-variant h5"></i>
                                        </a>
                                    </td>
                                    <td class=" ">
                                        <a href="{{ route('student.edit', 1) }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-pencil h5"></i>
                                        </a>
                                        <a href="" class="btn table-btn-sm btn-danger">
                                            <i class="mdi mdi-delete h5 text-white"></i>
                                        </a>


                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 d-none d-sm-block">
            <div class="card " >
                <div class="card-body position-relative">
                    <p class="  fs-4 mb-2 text-center">Student Filter</p>

                    <form action="">
                        <div class=" mb-3">
                            <label for="">Course</label>
                            <select class="select2  form-select shadow-none" style="width: 100%; height:36px;">
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

                        <div class="d-flex justify-content-center align-items-center ">
                            <div class="position-absolute filterbtn">
                                <button class="btn btn-secondary me-2" type="submit">Cancel</button>
                                <button class="btn btn-primary " type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<div class="modal fade" id="staticBackdrop"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Student Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body  position-relative">
        <form action="">
            <div class=" mb-3">
                <label for="">Course</label>
                <select class="select2  form-select shadow-none" style="width: 100%; height:36px;">
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

            <div class="d-flex justify-content-center align-items-center ">
                <div class="">
                    <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary " type="submit">Submit</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endpush
