@extends('layout.template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex ">

                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Class</a></li>
                            <li class="breadcrumb-item active " aria-current="page">List</li>
                        </ol>
                    </nav>
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
                        <div class="">
                            <a href="" class="btn plus-btn btn-secondary">
                                <i class="mdi mdi-plus h5"></i>
                            </a>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr style="border-bottom: 2px solid black">
                                <th scope="col">Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Lecturer</th>
                                <th scope="col">State</th>
                                <th class="text-center" scope="col">Controls</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Web Foundation</td>
                                <td scope="row">IT</td>
                                <td>Breden Wanger</td>
                                <td>
                                    <div class="bg-success paystatus-div d-flex justify-content-center align-items-center">
                                        <h6 class="pay-status">paid</h6>
                                    </div>
                                </td>
                                <td class=" text-center">
                                     <a href="" class="btn table-btn-sm btn-primary">
                                        <i class="mdi mdi-pencil h5"></i>
                                    </a>
                                    <a href="" class="btn table-btn-sm btn-danger">
                                        <i class="mdi mdi-delete h5 text-white"></i>
                                    </a>
                                    <a href="" class="btn table-btn-sm btn-dark">
                                        <i class="mdi mdi-dots-vertical h4"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Japanese N5</td>
                                <td scope="row">Language</td>
                                <td>Ashton Cox</td>
                                <td>
                                    <div class="bg-danger paystatus-div d-flex justify-content-center align-items-center">
                                    <h6 class="pay-status">unpaid</h6>
                                    </div>
                                </td>
                                <td class=" text-center">
                                     <a href="" class="btn table-btn-sm btn-primary">
                                        <i class="mdi mdi-pencil h5"></i>
                                    </a>
                                    <a href="" class="btn table-btn-sm btn-danger">
                                        <i class="mdi mdi-delete h5 text-white"></i>
                                    </a>
                                    <a href="" class="btn table-btn-sm btn-dark">
                                        <i class="mdi mdi-dots-vertical h4"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="height: 600px">
                <div class="card-body">
                    <p class=" text-center fs-4 mb-2">Class Filter</p>

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
                                <option>Select Student</option>
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
