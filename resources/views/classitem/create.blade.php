@extends('layout.template')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <!-- <h4 class="page-title">Classes / Class Create</h4> -->
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('classitem')}}">Class</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="card my-2">
      <div class="card-body">
        <form>
          <div class = "row">
            <div class="col-sm-4">
              <div class="form-group test">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Class name">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group test">
                <label for="startdate">Start Date</label>
                <input type="date" class="form-control" id="enddate" placeholder="Start date">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group test">
                <label for="enddate">End Date</label>
                <input type="date" class="form-control" id="enddate" placeholder="End date">
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
              <label for="course">Course Name</label>
                <select class="form-select slectopt" id="course">
                  <option selected>Select course name</option>
                  <option value="1">Web Development</option>
                  <option value="2">Japanese N5</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="starttime">Start Time</label>
                <!-- <input type="time" class="form-control" id="starttime" value="19:00"> -->
                <input type="text" placeholder="--:--" onfocus="(this.type='time')" class="form-control" id="starttime">
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="endtime">End Time</label>
                <input type="text" placeholder="--:--" onfocus="(this.type='time')" class="form-control" id="endtime" class="starttime">
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
              <label for="lecturer">Lecturer</label>
                <select class="form-select slectopt" id="lecturer">
                  <option selected>Select lecturer name</option>
                  <option value="1">Aye</option>
                  <option value="2">Mya</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="day" class="d-block">Day</label>
                {{-- <div class = "multisel-day"> --}}
                <select class="js-example-basic-multiple form-select" name="days[]" multiple="multiple" id="day">
                  <option value="Mo">Monday</option>
                  <option value="Tu">Tuesday</option>
                  <option value="We">Wednesday</option>
                  <option value="Th">Thursday</option>
                  <option value="Fr">Friday</option>
                  <option value="Sa">Saturday</option>
                  <option value="Su">Sunday</option>
                </select>
                {{-- </div> --}}
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" placeholder="Price">
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="maxstudent">Maximun Student</label>
                <input type="number" class="form-control" id="maxstudent" placeholder="Student limit">
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
              <label for="type">Type</label>
                <select class="form-select slectopt" id="type">
                  <option selected>Select type</option>
                  <option value="2">Weekday</option>
                  <option value="1">Weekend</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="hex">Set Color</label>
                <div class="d-flex">
                <input type="text" placeholder="#958D8D" class="form-control" id="hex">
                <input type="color"  id="color" class = "class-colorpicker">
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
              <label for="room">Room Name</label>
                <select class="form-select slectopt" id="room">
                  <option selected>Select room name</option>
                  <option value="1">Room One</option>
                  <option value="2">Room Two</option>
                  <option value="3">Room Three</option>
                </select>
              </div>
            </div>
      </div>

      <div class="text-center mt-5">
      <button type="submit" class="btn btn-secondary">Cancel</button>
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
</div>
</div>


@endsection
