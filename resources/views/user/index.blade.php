@extends('layout.template')

@section('custom')
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">
@endsection

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex ">

                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">User</a></li>
                            <li class="breadcrumb-item active " aria-current="page">List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row  px-3">
        <div class="col-9">
            <div class="card rounded-3" style="height: 600px">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0 fw-bolder">Total - 10</p>
                        <div class="">
                            <a href="{{ route('user.create') }}" class="btn plus-btn btn-secondary">
                                <i class="mdi mdi-plus h5"></i>
                            </a>
                        </div>
                    </div>

<table class="table table-striped">
  <thead>
    <tr style="border-bottom: 2px solid black">
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col" class="text-end">Control</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class = "align-middle">Zaw</td>
      <td class = "align-middle">zaw@mail.com</td>
      <td class = "align-middle">Admin</td>
        <td class="text-end">
                <a href="{{ route('user.edit' , 1) }}" class="btn table-btn-sm btn-primary">
                <i class="mdi mdi-pencil h5"></i>
            </a>
            <a href="" class="btn table-btn-sm btn-danger">
                <i class="mdi mdi-delete h5 text-white"></i>
            </a>

        </td>
    </tr>
    <tr>
      <td class = "align-middle">Aye</td>
      <td class = "align-middle">aye@mail.com</td>
      <td class = "align-middle">Lecturer</td>
        <td class="text-end">
                <a href="{{ route('user.edit' , 1) }}" class="btn table-btn-sm btn-primary">
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
                <div class="card-body position-relative">
                    <p class="  fs-4 mb-2 text-center">User Filter</p>

                    <form action="">
                        <div class=" mb-3">
                            <label for="">Name</label>
                            <select class="select2  form-select shadow-none" style="width: 100%; height:36px;">
                                <option>Select Name</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Role</label>
                            <select class="select2  form-select shadow-none">
                                <option>Select Role</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-center">
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
