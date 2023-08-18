@extends('layout.template')
@section('custom')
<link rel="stylesheet" href="{{asset('css/class.css')}}">
@endsection

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
        <form method="post" action="{{route('classitem.store')}}">
          @csrf
          {{-- @if(session()->has('message'))
          <div class="alert alert-success success-alt">
            {{session()->get('message')}}
            <button type="button" class="close success-msg" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
          </div>
          @endif --}}
          {{-- @if(session()->has('message'))
          <script>
            noty({
                type: 'success',
                text: '{{ session('success') }}',
                timeout: 3000
            });
        </script>
          @endif --}}
          <div class = "row">
            <div class="col-sm-4">
              <div class="form-group test">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Class name" name="name">
                <span class="text-danger">@error ('name') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group test">
                <label for="startdate">Start Date</label>
                <input type="date" class="form-control" id="enddate" placeholder="Start date" name = "startdate">
                <span class="text-danger">@error ('startdate') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group test">
                <label for="enddate">End Date</label>
                <input type="date" class="form-control" id="enddate" placeholder="End date" name="enddate">
                <span class="text-danger">@error ('enddate') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
              <label for="course">Course Name</label>
                <select class="form-select slectopt" id="course" name="course">
                  <option value="">Select course name</option>
                  @foreach($courseoption as $course)
                  <option value="{{$course->id}}">{{$course->name}}</option>
                  @endforeach
                </select>
                <span class="text-danger">@error('course') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="starttime">Start Time</label>
                <!-- <input type="time" class="form-control" id="starttime" value="19:00"> -->
                <input type="text" placeholder="--:--" onfocus="(this.type='time')" class="form-control" id="starttime" name="starttime">
                <span class="text-danger">@error('starttime') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="endtime">End Time</label>
                <input type="text" placeholder="--:--" onfocus="(this.type='time')" class="form-control" id="endtime" class="starttime" name="endtime">
                <span class="text-danger">@error('endtime') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
              <label for="lecturer">Lecturer</label>
                <select class="form-select slectopt" id="lecturer" name="lecturer">
                  <option value="">Select Lecturer name</option>
                  @foreach($lectureroption as $lecturer)
                  <option value="{{$lecturer->id}}">{{$lecturer->name}}</option>
                  @endforeach
                </select>
                <span class="text-danger">@error('lecturer') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
              <label for="room">Room</label>
                <select class="form-select slectopt" id="room" name="room">
                  <option value="">Select Room name</option>
                  @foreach($roomoption as $room)
                  <option value="{{$room->id}}">{{$room->name}}</option>
                  @endforeach
                </select>
                <span class="text-danger">@error('room') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="day" class="d-block">Day</label>
                {{-- <div class = "multisel-day"> --}}
                <select class="js-example-basic-multiple form-select" name="days[]" multiple="multiple" id="day">
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                  <option value="Saturday">Saturday</option>
                  <option value="Sunday">Sunday</option>
                </select>
                <span class="text-danger">@error('days') {{$message}} @enderror</span>
                {{-- </div> --}}
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" placeholder="Price" name="price">
                <span class="text-danger">@error('price') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="maxstudent">Maximun Student</label>
                <input type="number" class="form-control" id="maxstudent" placeholder="Student limit" name="maxstudent">
                <span class="text-danger">@error('maxstudent') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
              <label for="type">Type</label>
                <select class="form-select slectopt" id="type" name="daytype">
                  <option value="">Select type</option>
                  <option value="weekdays">Weekdays</option>
                  <option value="weekend">Weekend</option>
                </select>
                <span class="text-danger">@error('daytype') {{$message}} @enderror</span>
              </div>
            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="hex">Set Color</label>
                <div class="d-flex">
            <input type="text" placeholder="#958D8D" class="form-control" id="hex">
                <input type="color"  id="color" class = "class-colorpicker" name="color" value="{{ old('color') }}">
                </div>
                <span class="text-danger">@error('color') {{$message}} @enderror</span>
              </div>

            </div>
            <div class="col-sm-4 mt-3">
              <div class="form-group test">
                <label for="shortcode">Short Code</label>
                <input type="text" class="form-control" id="shortcode" placeholder="Short Code" name="shortcode">
                <span class="text-danger">@error('shortcode') {{$message}} @enderror</span>
              </div>
            </div>
            <!-- <div class="col-sm-4 mt-3">
              <div class="form-group test">
              <label for="room">Room Name</label>
                <select class="form-select slectopt" id="room">
                  <option selected>Select room name</option>
                  <option value="1">Room One</option>
                  <option value="2">Room Two</option>
                  <option value="3">Room Three</option>
                </select>
              </div>
            </div> -->
      </div>

      <div class="text-center mt-5 form-create-btn">
      <a href="{{route('classitem.index')}}" class="btn btn-secondary me-2">Cancel</a>
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
</div>
</div>


@endsection
