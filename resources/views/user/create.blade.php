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
@endsection
@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex ">
      <div class="">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="#">Users</a></li>
            <li class="breadcrumb-item active " aria-current="page">Create</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="row  px-3">
<div class="col-md-12">
  <div class="card rounded-3 " style="height: 600px">
    <div class="card-body">
      <form>
        <div class="row col-md-4">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="oldpassword">Old Password</label>
            <input type="password" class="form-control" placeholder="old password">
          </div>
          <div class="form-group">
            <label for="newpassword">New Password</label>
            <input type="password" class="form-control" id="newpassword" placeholder="new password">
          </div>
          <div class="form-group">
            <label for="confirmpassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password">
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select class="form-select">
              <option id = "role" selected>Select Role</option>
              <option value="1">Role One</option>
              <option value="2">Role Two</option>
              <option value="3">Role Three</option>
            </select>
          </div>
        </div>
        <div class = "mt-5 text-center">
          <button type="submit" class="btn btn-secondary">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
