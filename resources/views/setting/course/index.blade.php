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
    <link rel="stylesheet" href="{{ asset('css/course.css') }}">
@endsection



@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex ">

                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item active " aria-current="page">Course List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row  px-3 max-height">
        <div class="col-md-12">
            <div class="card rounded-3 position-relative">
                <div class="card-body ">
                    <div class="course-width">
                        <div class="course-row" id="courseRow">
                            <div class="row-item mb-3">
                                <div class="course-btn me-2 d-inline-block text-center">
                                    <a href="" class=" btn table-btn-sm btn-outline-primary border-0">
                                        <i class=" mdi  mdi-pencil-box-outline h3"></i>
                                    </a>
                                </div>

                                <input type="text" class=" form-control d-inline-block" value="ClassA" disabled>
                                <div class="course-btn ms-2 d-inline-block text-center">
                                    <a href="" class=" btn table-btn-sm btn-outline-primary border-0">
                                        <i class=" mdi mdi-delete h3"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row-item mb-3">
                                <div class="course-btn me-2 d-inline-block text-center">
                                    <a href="" class=" btn table-btn-sm btn-outline-primary border-0">
                                        <i class=" mdi  mdi-pencil-box-outline h3"></i>
                                    </a>
                                </div>

                                <input type="text" class=" form-control d-inline-block" value="ClassA" disabled>
                                <div class="course-btn ms-2 d-inline-block text-center">
                                    <a href="" class=" btn table-btn-sm btn-outline-primary border-0">
                                        <i class=" mdi mdi-delete h3"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row-item mb-3">
                                <div class="course-btn me-2 d-inline-block text-center">
                                    <a href="" class=" btn table-btn-sm btn-outline-primary border-0">
                                        <i class=" mdi  mdi-pencil-box-outline h3"></i>
                                    </a>
                                </div>

                                <input type="text" class=" form-control d-inline-block" value="ClassA" disabled>
                                <div class="course-btn ms-2 d-inline-block text-center">
                                    <a href="" class=" btn table-btn-sm btn-outline-primary border-0">
                                        <i class=" mdi mdi-delete h3"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row-item mb-3">
                                <div class="course-btn me-2 d-inline-block text-center">
                                    <a href="" class=" btn table-btn-sm btn-outline-primary border-0">
                                        <i class=" mdi  mdi-pencil-box-outline h3"></i>
                                    </a>
                                </div>

                                <input type="text" class=" form-control d-inline-block" value="ClassA" disabled>
                                <div class="course-btn ms-2 d-inline-block text-center">
                                    <a href="" class=" btn table-btn-sm btn-outline-primary border-0">
                                        <i class=" mdi mdi-delete h3"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row-item mb-3">
                                <div class="course-btn me-2 d-inline-block text-center me-2">
                                    <a href="" class=" btn table-btn-sm btn-outline-primary border-0">
                                        <i class=" mdi  mdi-pencil-box-outline h3"></i>
                                    </a>
                                </div>

                                <input type="text" class=" form-control d-inline-block" value="ClassA" disabled>
                                <div class="course-btn ms-2 d-inline-block text-center">
                                    <a href="" class=" btn table-btn-sm btn-outline-primary border-0">
                                        <i class=" mdi mdi-delete h3"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row-item mb-3">
                                <a href="" class=" btn course-btn  btn-primary px-1 me-2">
                                    Add
                                </a>

                                <input type="text" class=" form-control d-inline-block" placeholder="Add new course" >
                                <button  class=" btn course-btn btn-secondary px-1 ms-2 course-del">
                                    Cancel
                                </button>
                            </div>
                        </div>

                        <div class=" bg-light p-fixed">
                            <button id="addCourse" class="btn btn-primary w-50  add-course d-flex justify-content-center align-items-center gap-2">
                                <i class="mdi mdi-plus-circle h3 mb-0"></i>
                                <p class="">Create new course</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
