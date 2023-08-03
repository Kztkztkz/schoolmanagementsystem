@extends('layout.template')

@section('custom')
<style>
.body{
    font-family     : 'Nunito Sans' , sans-serif;
}

.default-font-size{
    font-size:1em;
}
.main-header{
    font-size: 1.5em;
}
.sub-header{
    font-size: 1.25em;
}
.small-header{
    font-size: 1.125em;
}
.border-radius{
    border-radius: 6px;
}


.page-title{
    font-size: 1.5rem;
}
.btn-primary{
    background-color:  #007AFF;

}


.row{
    margin-bottom: 10px;
}

.text-left{
    text-align: left;
}

.card-body{
    height: 600px;
}

</style>
@endsection


@section('content')
<div class="page-breadcrumb">    
         <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="http://localhost:8000/classitem">Class</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
              <form>
                <div class="col-12 d-flex justify-content-end ">
                    <a href="{{ route('student.create') }}" type="button" class="btn btn-primary d-none d-md-block " style="font-size: 14px; border:none;">Enroll New Student</a>
                </div>

                <div class="row d-flex justify-content-between">
                    <div class="col-xs-12 col-md-6 ">
                        <div class="col-xs-12 col-12 ">
                            <div class="row">
                                    <div class="col-4">Time</div>
                                    <div class="col-2">-</div>
                                    <div class="col-4">{{ $classitem->start_time }} - {{ $classitem->end_time }}</div>
                            </div>
                            <div class="row">
                                <div class="col-4">fee</div>
                                <div class="col-2">-</div>
                                <div class="col-4">{{ $classitem->price }} mmk</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Course name</div>
                                <div class="col-2">-</div>
                                <div class="col-4">{{ $classitem->course->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Days</div>
                                <div class="col-2">-</div>
                                <div class="col-4">
                                    <ul class="list-group list-unstyled">
                                        <li class="">{{ $classitem->day }}</li>
                                    </ul>
                                    {{-- <div class="row">Tues,Wed,Fr</div>
                                    <div class="row">(Wednesday)</div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">Lecture</div>
                                <div class="col-2">-</div>
                                <div class="col-4">
                                    @foreach($classitem->users as $user)
                                    {{ $user->name }}<br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 d-flex justify-content-start d-block d-md-none mb-3">
                        <a href="{{ route('student.create') }}" type="button" class="btn btn-primary d-block d-md-none" style="font-size: 14px; border:none;">Enroll New Student</a>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <h5 class="sub-header">Enroll existing student</h5>

                        <div class="mt-3 mb-3">
                            <label for="">Select Existing Student</label>
                            <div class="input-group w-75">
                                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                <option selected>Select Existing Student</option>
                                @foreach ($students as $student)
                                <option value="{{$student->id}}">{{$student->name}}</option>    
                                @endforeach
                                
                                </select>
                            </div>
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="">Type</label>
                            <div class="input-group w-75">
                                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                  <option selected>Select payment type</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mt-3 mb-3">
                            <label for="amount mb-0"> <p class="small-header mb-0">Amount</p></label>
                            <input type="text" class="form-control w-75" id="amount">                            
                        </div>

                        <div class="mt-3 mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label mb-0" for="flexRadioDefault1">
                                <p class="small-header mb-0">Print out the slip</p>
                            </label>
                        </div>
                                                
                        <div>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                            <button type="button" class="btn btn-primary">Enroll</button>
                        </div>

                    </div>
                </div>
              </form>
            </div>
        </div>
</div>


@endsection

@push('scripts')
{{-- model --}}
    {{-- <div class="modal fade" id="staticBackdrop" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title sub-header"> Enroll existing student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding:10%">
               
                <div class="col-12" >

                    <h5 class="sub-header">Enroll existing student</h5>

                    <div class="mt-3 mb-3">
                        <label for="">Select Existing Student</label>
                        <div class="input-group w-75">
                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected>Select Existing Student</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-3 mb-3">
                        <label for="">Type</label>
                        <div class="input-group w-75">
                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                              <option selected>Select payment type</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mt-3 mb-3">
                        <label for="amount mb-0"> <p class="small-header mb-0">Amount</p></label>
                        <input type="text" class="form-control w-75" id="amount">                            
                    </div>

                    <div class="mt-3 mb-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label mb-0" for="flexRadioDefault1">
                            <p class="small-header mb-0">Print out the slip</p>
                        </label>
                    </div>

                </div>
              
            </div>
            
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Enroll</button>
            </div>
          </div>
        </div>
    </div> --}}
{{-- model --}}
@endpush


