@extends('layout.template')
@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-sm-9 col-xs-12 d-flex ">
      <div class="">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item asdf"><a href="#">User</a></li>
            <li class="breadcrumb-item active " aria-current="page">List</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-md-3">
        <div class="mx-auto">
            <div class="input-group">
                <input class="form-control border-end-0 border" placeholder="search user" type="search" value="" id="example-search-input">
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
<!-- filter button -->
<!-- Button trigger modal -->
<div class="d-flex justify-content-end me-3 mb-3 d-xs-block d-sm-none">
<button type="button" class="btn btn-primary d-flex modlbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  User Filter
</button>
</div>

<!-- end filter button -->
<!-- responsive table -->
<div class="row  px-3 max-height d-xs-block d-sm-none" >
  <div class="col-sm-12">
    <div class="card rounded-3 d-sm-block d-md-none" >
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
              <th scope="col" class="text-center">Control</th>
            </tr>
          </thead>
          <tbody>
            <tr data-bs-toggle="collapse" href="#collapseExample">
              <td class = "align-middle">Ko</td>
              <td class = "align-middle">ko@mail.com</td>
              <td class="text-end">
                <a href="{{ route('user.edit' , 1) }}" class="btn table-btn-sm btn-primary">
                <i class="mdi mdi-pencil h5"></i>
                </a>
                <a href="" class="btn table-btn-sm btn-danger">
                <i class="mdi mdi-delete h5 text-white"></i>
                </a>
              </td>
              <td>

              <span class="dropdown-arrowIcon data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></span>
              </td>

            </tr>

            <tr>
            <td colspan="4" class="hiddenRow">
              <div class="collapse text-center" id="collapseExample">
                <div class="row">
              <div class = "col-6 text-end">
	<p class="mb-3"><strong>Role</strong> -  </p>
</div>
<div class = "col-6 text-start">
	<p class="mb-2">Admin</p>
</div>
</div>
              </div>
            </td>
        </tr>

            <tr data-bs-toggle="collapse" href="#collapseExample2">
              <td class = "align-middle">Mg </td>
              <td class = "align-middle">mg@mail.com</td>
              <td class="text-end">
                <a href="{{ route('user.edit' , 1) }}" class="btn table-btn-sm btn-primary">
                <i class="mdi mdi-pencil h5"></i>
                </a>
                <a href="" class="btn table-btn-sm btn-danger">
                <i class="mdi mdi-delete h5 text-white"></i>
                </a>
              </td>
              <td>
              <span class="dropdown-arrowIcon2" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"></span>
              </td>
            </tr>
            <tr>
            <td colspan="4" class="hiddenRow">
              <div class="collapse text-center" id="collapseExample2">
                <div class="row">
              <div class = "col-6 text-end">
	<p class="mb-3"><strong>Role</strong> -  </p>
</div>
<div class = "col-6 text-start">
	<p class="mb-2">Lecturer</p>
</div>
</div>
              </div>
            </td>
        </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- end responsive -->
<div class="row  px-3 max-height d-none d-sm-flex" >
  <div class="col-9">
    <div class="card rounded-3" >
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
              <td class = "align-middle">Ko</td>
              <td class = "align-middle">ko@mail.com</td>
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
              <td class = "align-middle">Mg </td>
              <td class = "align-middle">mg@mail.com</td>
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
    <div class="card" >
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

@push('scripts')
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">User Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body  position-relative">
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