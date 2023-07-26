@extends('layout.template')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-sm-9 col-xs-12 d-flex ">
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item asdf"><a href="#">Class</a></li>
                            <li class="breadcrumb-item active " aria-current="page">List</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mx-auto">
                    <div class="input-group">
                        <input class="form-control border-end-0 border" placeholder="search class" type="search"
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
    <!-- filter button -->
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end me-3 mb-3 d-xs-block d-md-none filter-btn">
        <button type="button" class="btn table-btn-sm btn-primary border border-0 d-flex "  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="mdi mdi-file-find h3 mb-0"></i>
        </button>
    </div>
    <!-- end filter button -->

    <div class="row  px-3 max-height  d-sm-flex">
        <div class="col-12 col-md-9 class-table">
            <div class="card rounded-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0 fw-bolder">Total - 10</p>
                        <div class="">
                            <a href="{{ route('classitem.create') }}" class="btn d-flex justify-content-center align-items-center plus-btn btn-outline-secondary ">
                                <i class="mdi mdi-plus h5 mb-0"></i>
                            </a>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr style="border-bottom: 2px solid black">
                                <th scope="col" class="list-lecturer-col" >
                                    <p class="d-none d-md-block">Name</p>
                                    <p class="d-block d-md-none">Class & Lecturer</p>
                                </th>
                                <th scope="col" class="list-course-col">Course</th>
                                <th class="d-none d-md-table-cell list-lecturer-col" scope="col">Lecturer</th>
                                <th scope="col" class="list-status-col">Status</th>
                                <th class="d-none d-md-table-cell list-payment-col text-center" scope="col" >Payment</th>
                                <th scope="col" class="text-center list-control-col" class="">
                                    <p class=" d-none d-md-block">Control</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <p class="d-none d-md-block">Basic to Pro</p>
                                    <div class="d-block d-md-none">
                                        <p>Basic to Pro</p>
                                        <p class=" text-black-50">Breden Wagner</p>
                                    </div>
                                </td>
                                <td class="align-middle">Web Development</td>
                                <td class="d-none d-md-table-cell  align-middle" >Breden Wagner</td>
                                <td class=" align-middle">
                                    <div class="bg-success pay-status d-flex justify-content-center align-items-center rounded">
                                        paid
                                    </div>
                                </td>
                                <td class="d-none d-md-table-cell align-middle text-center" >
                                    <a href="" class="btn table-btn-sm btn-primary">
                                        <i class="mdi mdi-credit-card-multiple h5"></i>
                                    </a>
                                </td>
                                <td class="text-end align-middle">
                                    <div class="d-none d-md-block control-btns">
                                        <a href="{{ route('classitem.edit', 1) }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-pencil h5"></i>
                                        </a>
                                        <a href="{{ route('classitem.show', 'detail') }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-information-outline h5"></i>
                                        </a>
                                        <a href="" class="btn table-btn-sm btn-danger">
                                            <i class="mdi mdi-delete h5 text-white"></i>
                                        </a>

                                    </div>


                                    <div class="btn-group control-btn dropup d-block d-md-none ">
                                        <button type="button" class="btn table-btn-sm btn-outline-dark border border-0 dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical h4"></i>
                                        </button>

                                        <ul class="dropdown-menu mb-1">
                                            <div class="d-flex justify-content-around">
                                                <li>
                                                    <a href="{{ route('classitem.edit', 1) }}" class="btn table-btn-sm btn-outline-primary border border-0">
                                                        <i class="mdi mdi-pencil h5"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="btn table-btn-sm btn-outline-danger border border-0">
                                                        <i class="mdi mdi-delete h5 "></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('classitem.show', 'detail') }}" class="btn table-btn-sm btn-outline-secondary border border-0">
                                                        <i class="mdi mdi-information-outline h4"></i>
                                                    </a>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">
                                    <p class="d-none d-md-block text-cut">Basic to Pro</p>
                                    <div class="d-block d-md-none">
                                        <p>Basic to Pro </p>
                                        <p class=" text-black-50 text-cut">Breden Wagner</p>
                                    </div>
                                </td>
                                <td class="align-middle">Web Development</td>
                                <td class="d-none d-md-table-cell align-middle" >KBreden  Wagner </td>
                                <td class=" align-middle">
                                    <div
                                        class="bg-danger pay-status d-flex justify-content-center align-items-center rounded">
                                        unpaid
                                    </div>
                                </td>
                                <td class="d-none d-md-table-cell align-middle text-center">
                                    <a href="" class="btn table-btn-sm btn-primary">
                                        <i class="mdi mdi-credit-card-multiple h5"></i>
                                    </a>
                                </td>
                                <td class="text-end align-middle text-nowrap">
                                    <div class="d-none d-md-block control-btns">
                                        <a href="{{ route('classitem.edit', 1) }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-pencil h5"></i>
                                        </a>
                                        <a href="{{ route('classitem.show', 'detail') }}"
                                            class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-information-outline h5"></i>
                                        </a>
                                        <a href="" class="btn table-btn-sm btn-danger">
                                            <i class="mdi mdi-delete h5 text-white"></i>
                                        </a>

                                    </div>

                                    <div class="btn-group dropup d-block d-md-none control-btn">
                                        <button type="button" class="btn table-btn-sm btn-outline-dark border border-0 dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical h4"></i>
                                        </button>

                                        <ul class="dropdown-menu mb-1">
                                            <div class="d-flex justify-content-around">
                                                <li>
                                                    <a href="{{ route('classitem.edit', 1) }}" class="btn table-btn-sm btn-outline-primary border border-0">
                                                        <i class="mdi mdi-pencil h5"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="btn table-btn-sm btn-outline-danger border border-0">
                                                        <i class="mdi mdi-delete h5 "></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('classitem.show', 'detail') }}" class="btn table-btn-sm btn-outline-secondary border border-0">
                                                        <i class="mdi mdi-information-outline h4"></i>
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
        <div class="col-3 d-none d-md-block class-filter-container">
            <div class="card">
                <div class="card-body position-relative filter-card">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <i class="mdi mdi-file-find h3 me-1"></i>
                        <p class="  fs-4 mb-2 text-center">Class Filter</p>
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
                            <label for="">Student</label>
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
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Class Filter</h5>
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
                            <label for="">Student</label>
                            <select class="select2  form-select shadow-none">
                                <option>Select Class</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endpush
