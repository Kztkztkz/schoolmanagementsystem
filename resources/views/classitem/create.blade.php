@extends('layout.template')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Classes / Class Create</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="card my-5">
      <div class="card-body">
        <form>
          <div class = "row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Class name">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="startdate">Start Date</label>
                <input type="date" class="form-control" id="enddate" placeholder="Start date">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="enddate">End Date</label>
                <input type="date" class="form-control" id="enddate" placeholder="End date">
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group">
              <label for="course">Course Name</label>
                <select class="form-select" id="course">
                  <option selected>Select course name</option>
                  <option value="1">Web Development</option>
                  <option value="2">Japanese N5</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group">
                <label for="starttime">Start Time</label>
                <!-- <input type="time" class="form-control" id="starttime" placeholder="Enter email"> -->
                <input type="text" placeholder="--:--" onfocus="(this.type='time')" class="form-control" id="starttime">
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group">
                <label for="endtime">End Time</label>
                <input type="text" placeholder="--:--" onfocus="(this.type='time')" class="form-control" id="endtime" class="starttime">
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group">
                <label for="lecturer">Lecturer</label>
                <select class="js-example-basic-multiple form-select" name="states[]" multiple="multiple" id="lecturer">
                  <option value="AL">Mya</option>
                  <option value="WY">Aye</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group">
              <label for="day">Day</label>
                <select class="form-select" id="day">
                  <option selected>Select days</option>
                  <option value="1">Weekend</option>
                  <option value="2">Weekday</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group">
              <label for="type">Type</label>
                <select class="form-select" id="type">
                  <option selected>Select type</option>
                  <option value="1">In Class</option>
                  <option value="2">Zoom</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group">
                <label for="maxstudent">Maximun Student</label>
                <input type="number" class="form-control" id="maxstudent" placeholder="Student limit">
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" placeholder="Price">
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group">
                <label for="hex">Set Color</label>
                <div class="position-relative">
                <input type="text" placeholder="#958D8D" class="form-control" id="hex">
                <input type="color"  id="color" class = "position-absolute class-colorpicker">
                </div>                
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group">
              <label for="room">Room Name</label>
                <select class="form-select" id="room">
                  <option selected>Select room name</option>
                  <option value="1">Room One</option>
                  <option value="2">Room Two</option>
                  <option value="3">Room Three</option>
                </select>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-secondary">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
      <button type="submit" class="btn btn-secondary">Cancel</button>
      <button type="submit" class="btn btn-primary">Submit</button>





</form>
  </div>
</div>
</div>


@endsection
