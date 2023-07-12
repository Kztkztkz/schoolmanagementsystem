@extends('layout.template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex ">

                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Student</a></li>
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
                                <th scope="col">Contact</th>
                                <th scope="col">Address</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Class</th>
                                <th class="text-center" scope="col">Controls</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Kyaw</td>
                                <td>
                                    <p class="mb-0">kyaw@email.com</p>
                                    <p class="mb-0">0934355333</p>
                                </td>
                                <td>No.1 Pyay ...</td>
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
                                <td class=" text-center">
                                     <a href="" class="btn table-btn-sm btn-primary">
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
                                <td>No.1 Pyay ...</td>
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
                                <td class=" text-center">
                                     <a href="" class="btn table-btn-sm btn-primary">
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
                                <td>No.1 Pyay ...</td>
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
                                <td class=" text-center">
                                     <a href="" class="btn table-btn-sm btn-primary">
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
                                <td>No.1 Pyay ...</td>
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
                                <td class=" text-center">
                                     <a href="" class="btn table-btn-sm btn-primary">
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
        <div class="col-3">
            <div class="card" style="height: 600px">
                <div class="card-body">
                    <p class=" text-center fs-4 mb-2">Student Filter</p>

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