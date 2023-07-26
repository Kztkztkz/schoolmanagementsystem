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
                        <input class="form-control border-end-0 border" placeholder="search student" type="search"
                            value="" id="example-search-input">
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
        <div class="col-12 col-md-9 table-container">
            <div class="card rounded-3 ">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2 mb-lg-0">
                        <p class="mb-0 fw-bolder">Total - 10</p>
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
                                    <th scope="col" class="text-center">
                                        <p class=" d-none d-md-block">Control</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Kyaw</td>
                                    <td>
                                        <p class="mb-0">kyaw@email.com</p>
                                        <p class="mb-0">0934355333</p>
                                    </td>
                                    <td class="d-none d-lg-table-cell">
                                        <p>No.1 Pyay sit amet reprehenderit animi ea?</p>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-credit-card-multiple h5"></i>
                                        </a>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-book-open-page-variant h5"></i>
                                        </a>
                                    </td>
                                    <td class="text-end align-middle">
                                        <div class="d-none d-md-block control-btns">
                                            <a href="{{ route('student.edit', 1) }}" class="btn table-btn-sm btn-primary">
                                                <i class="mdi mdi-pencil h5"></i>
                                            </a>
                                            <a href="" class="btn table-btn-sm btn-danger">
                                                <i class="mdi mdi-delete h5 text-white"></i>
                                            </a>
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
                                                        <a href="{{ route('classitem.edit', 1) }}"
                                                            class="btn table-btn-sm btn-outline-primary border border-0">
                                                            <i class="mdi mdi-pencil h5"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=""
                                                            class="btn table-btn-sm btn-outline-danger border border-0">
                                                            <i class="mdi mdi-delete h5 "></i>
                                                        </a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Kyaw</td>
                                    <td>
                                        <p class="mb-0">kyaw@email.com</p>
                                        <p class="mb-0">0934355333</p>
                                    </td>
                                    <td class="d-none d-lg-table-cell">
                                        <p>No.1 Pyay sit amet reprehenderit animi ea?</p>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-credit-card-multiple h5"></i>
                                        </a>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-book-open-page-variant h5"></i>
                                        </a>
                                    </td>
                                    <td class="text-end align-middle text-nowrap">
                                        <div class="d-none d-md-block control-btns">
                                            <a href="{{ route('student.edit', 1) }}"
                                                class="btn table-btn-sm btn-primary">
                                                <i class="mdi mdi-pencil h5"></i>
                                            </a>
                                            <a href="" class="btn table-btn-sm btn-danger">
                                                <i class="mdi mdi-delete h5 text-white"></i>
                                            </a>
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
                                                        <a href="{{ route('classitem.edit', 1) }}"
                                                            class="btn table-btn-sm btn-outline-primary border border-0">
                                                            <i class="mdi mdi-pencil h5"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=""
                                                            class="btn table-btn-sm btn-outline-danger border border-0">
                                                            <i class="mdi mdi-delete h5 "></i>
                                                        </a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Kyaw</td>
                                    <td>
                                        <p class="mb-0">kyaw@email.com</p>
                                        <p class="mb-0">0934355333</p>
                                    </td>
                                    <td class="d-none d-lg-table-cell">
                                        <p>No.1 Pyay sit amet reprehenderit animi ea?</p>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-credit-card-multiple h5"></i>
                                        </a>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-book-open-page-variant h5"></i>
                                        </a>
                                    </td>
                                    <td class="text-end align-middle">
                                        <div class="d-none d-md-block control-btns">
                                            <a href="{{ route('student.edit', 1) }}"
                                                class="btn table-btn-sm btn-primary">
                                                <i class="mdi mdi-pencil h5"></i>
                                            </a>
                                            <a href="" class="btn table-btn-sm btn-danger">
                                                <i class="mdi mdi-delete h5 text-white"></i>
                                            </a>
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
                                                        <a href="{{ route('classitem.edit', 1) }}"
                                                            class="btn table-btn-sm btn-outline-primary border border-0">
                                                            <i class="mdi mdi-pencil h5"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=""
                                                            class="btn table-btn-sm btn-outline-danger border border-0">
                                                            <i class="mdi mdi-delete h5 "></i>
                                                        </a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Kyaw</td>
                                    <td>
                                        <p class="mb-0">kyaw@email.com</p>
                                        <p class="mb-0">0934355333</p>
                                    </td>
                                    <td class="d-none d-lg-table-cell">
                                        <p>No.1 Pyay sit amet reprehenderit animi ea?</p>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-credit-card-multiple h5"></i>
                                        </a>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-book-open-page-variant h5"></i>
                                        </a>
                                    </td>
                                    <td class="text-end align-middle">
                                        <div class="d-none d-md-block control-btns">
                                            <a href="{{ route('student.edit', 1) }}"
                                                class="btn table-btn-sm btn-primary">
                                                <i class="mdi mdi-pencil h5"></i>
                                            </a>
                                            <a href="" class="btn table-btn-sm btn-danger">
                                                <i class="mdi mdi-delete h5 text-white"></i>
                                            </a>
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
                                                        <a href="{{ route('classitem.edit', 1) }}"
                                                            class="btn table-btn-sm btn-outline-primary border border-0">
                                                            <i class="mdi mdi-pencil h5"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=""
                                                            class="btn table-btn-sm btn-outline-danger border border-0">
                                                            <i class="mdi mdi-delete h5 "></i>
                                                        </a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
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
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
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
                                <button type="button" class="btn btn-secondary me-2"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary " type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush
