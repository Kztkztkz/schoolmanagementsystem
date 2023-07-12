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

</style>
@endsection


@section('content')
<div class="page-breadcrumb">    
        <h4 class="page-title">Class Detail / Web Foundation</h4>
        <div class="card my-5">
            <div class="card-body">
              <form>

                <div class="row d-flex justify-content-between">
                    <div class="col-5">
                        <div class="col-9">
                            <div class="row">
                                    <div class="col-4">Time</div>
                                    <div class="col-2">-</div>
                                    <div class="col-4">8am - 11am</div>
                            </div>
                            <div class="row">
                                <div class="col-4">fee</div>
                                <div class="col-2">-</div>
                                <div class="col-4">150000 mmk</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Course name</div>
                                <div class="col-2">-</div>
                                <div class="col-4">IT Course</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Days</div>
                                <div class="col-2">-</div>
                                <div class="col-4">
                                    <ul class="list-group list-unstyled">
                                        <li class="">Tues,Wed,Fr</li>
                                        <li class="">(Wednesday)</li>
                                    </ul>
                                    {{-- <div class="row">Tues,Wed,Fr</div>
                                    <div class="row">(Wednesday)</div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">Lecture</div>
                                <div class="col-2">-</div>
                                <div class="col-4">Brenden Wagner</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <h5 class="sub-header">Enroll existing student</h5>

                        <div class="mt-3 mb-3">
                            <label for="" class="mb-0"><p class="small-header mb-0">Search Existing Student</p></label>
                            <div class="dropdown">
                                <button class="btn border rounded dropdown-toggle w-75 text-left" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Select existing student
                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-3 mb-3">
                            <label for="" class="mb-0"><p class="small-header mb-0">Type</p></label>
                            <div class="dropdown">
                                <button class="btn border rounded dropdown-toggle w-75 text-left" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Select payment type
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
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

                    <div class="col-2">
                        <button type="button" class="btn btn-primary btn-sm">Enroll New Student</button>
                    </div>
                </div>
              </form>
            </div>
        </div>
</div>


@endsection
