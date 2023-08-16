@extends('layout.template')

@section('custom')
<style>
    @media screen and (max-width:460px){
    #main-wrapper{
        position: fixed !important;
    }

    .max-height{
        padding-bottom: 70px !important;
    }
}
</style>
@endsection
@section('ajaxcsrf')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-sm-9 col-xs-12 d-flex ">
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item asdf"><a href="#">Class</a></li>
                            <li class="breadcrumb-item active " aria-current="page">List</li>
                            {{-- @if(request('coursesearchclassitem'))
                            <li class="breadcrumb-item active d-xs-block d-sm-none" aria-current="page"> search by {{request('coursesearchclassitem')}}</li>
                            @endif
                            @if(request('studentsearchclassitem'))
                            <li class="mx-2 d-xs-block d-sm-none" style="color: #6c757d; font-weight: normal; margin-top: 5px; font-size: 16px;">/ search by {{request('studentsearchclassitem')}}</li>
                            @endif --}}
                        </ol>
                    </nav>
                </div>
            </div>
            <form class="col-md-3" action="{{route('classitem.index')}}" method="get">
                <div class="mx-auto">
                    <div class="input-group">
                        <input class="form-control border-end-0 border" placeholder="search class" type="search"
                        value="{{ request('classitemsearch') }}" id="classitemsearch" name="classitemsearch">
                        @if (request('coursesearchclassitem') || request('studentsearchclassitem'))
                        <input hidden name="coursesearchclassitem" value="{{ request('coursesearchclassitem') }}">
                        <input hidden name="studentsearchclassitem" value="{{ request('studentsearchclassitem') }}">
                        @endif
                        
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5"
                                type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row  px-3 max-height  d-sm-flex">
        <div class="col-12 col-md-9 class-table">
            <div class="card rounded-3">
                <div class="card-body table-responsive">
                    <div class="d-flex justify-content-between align-items-center mb-2 mb-lg-0">
                        <p class="mb-0 fw-bolder">Total - 10</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="{{ route('classitem.create') }}" class="btn d-flex me-2 justify-content-center align-items-center plus-btn btn-outline-secondary ">
                                <i class="mdi mdi-plus h5 mb-0"></i>
                            </a>
                            <div class="d-flex justify-content-end  d-xs-block d-md-none ">
                                <button type="button" class="btn plus-btn btn-outline-secondary d-flex " data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <i class="mdi mdi-filter-outline h5 mb-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @if(session()->has('message'))
                    <div class="alert alert-success success-alt mt-2">
                      {{session()->get('message')}}
                      <button type="button" class="close success-msg" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                    </div>
                    @endif
                    @if(session()->has('del'))
                    <div class="alert alert-success success-alt mt-2">
                      {{session()->get('del')}}
                      <button type="button" class="close success-msg" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                    </div>
                    @endif
                    <table class="table table-striped highscro">
                        <thead>
                            <tr style="border-bottom: 2px solid black">
                                <th scope="col" class="list-lecturer-col" >
                                    <p class="d-none d-md-block">Name</p>
                                    <p class="d-block d-md-none">Class & Lecturer</p>
                                </th>
                                <th scope="col" class="list-course-col">Course</th>
                                <th class="d-none d-md-table-cell list-lecturer-col" scope="col">Lecturer</th>
                                @can('viewAny', \App\Models\Classitem::class)
                                <th scope="col" class="list-status-col">Status</th>
                                <th class="d-none d-md-table-cell list-payment-col text-center" scope="col" >Payment</th>
                                @endcan
                                <th scope="col" class="text-center list-control-col" class="">
                                    <p class=" d-none d-md-block">Control</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="original" id="data-wrapper">
                            @include('classitem.data');
                            </div>
                          </tbody>
                          <tbody class="find" id="data-wrapper2">
                          </tbody>
                          <tr>
                            <td colspan="6" class="text-center">
                                <button class="btn btn-secondary load-more-data"><i class="fa fa-refresh"></i> Load More Data...</button>
                            </td>
                          </tr>
                    </table>
                     <!-- Data Loader -->
    <div class="auto-load text-center" style="display: none;">
        <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
            <path fill="#000"
                d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                    from="0 50 50" to="360 50 50" repeatCount="indefinite" />
            </path>
        </svg>
    </div>                    
                </div>
                <div class="d-flex justify-content-end me-3">
                {{-- {{$classitem->links()}} --}}
            </div>
            </div>
            
        </div>
        <div class="col-3 d-none d-md-block class-filter-container">
            <div class="card">
                <div class="card-body position-relative filter-card">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <i class="mdi mdi-file-find h3 me-1"></i>
                        <p class="  fs-4 mb-2 text-center">Class Filter</p>
                    </div>
                    <form action="{{route('classitem.index')}}" method="get">
                        <div class=" mb-3">
                            <label for="">Course</label>
                            <select id="coursesearchclassitem" class="select2 form-select shadow-none" style="width: 100%; height:36px;" name="coursesearchclassitem">
                                <option value = "">Select Course</option>
                                @foreach($courseoption as $courses)
                                    <option value="{{$courses->id}}" {{ $courses->id == request('coursesearchclassitem') ? 'selected' : '' }}>{{$courses->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=" mb-3">
                            <label for="">Student</label>
                            <select id="studentsearchclassitem" class="select2  form-select shadow-none" style="width: 100%; height:36px;" name="studentsearchclassitem" id="studentsearchclassitem">
                                <option value = "">Select Student</option>
                                @foreach($studentoption as $students)
                                    <option value="{{$students->id}}" {{ $students->id == request('studentsearchclassitem') ? 'selected' : '' }}>{{$students->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="position-absolute filterbtn">
                                <a class="btn btn-secondary cnl-btn me-2" href="{{route('classitem.index')}}">Cancel</a>
                                <button class="btn btn-primary sub-btn " type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('dataloader')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@push('scripts')
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Class Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body  position-relative">
                    <form action="{{route('classitem.index')}}" method="get">
                        <div class=" mb-3">
                            <label for="">Course</label>
                            <select class="select2  form-select shadow-none" style="width: 100%; height:36px;" name="coursesearchclassitem">
                                <option>Select Course</option>
                                @foreach($courseoption as $courses)
                                    <option value="{{$courses->name}}">{{$courses->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Student</label>
                            <select class="select2  form-select shadow-none" name="studentsearchclassitem">
                                <option>Select Class</option>
                            @foreach($studentoption as $students)
                                <option value="{{$students->id}}">{{$students->name}}</option>
                            @endforeach
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    var ENDPOINT = "{{ route('classitem.index') }}";
    var page = 1;
  
    $(".load-more-data").click(function(){
        page++;
        infinteLoadMore(page);
    });
  
    /*------------------------------------------
    --------------------------------------------
    call infinteLoadMore()
    --------------------------------------------
    --------------------------------------------*/
    function infinteLoadMore(page) {
        $.ajax({
                url: ENDPOINT + "?page=" + page,
                datatype: "html",
                type: "get",
                beforeSend: function () {
                    $('.auto-load').show();
                }
            })
            .done(function (response) {
                if (response.html == '') {
                    $('.auto-load').html("We don't have more data to display :(");
                    return;
                }
                $('.auto-load').hide();
                if(!window.location.href.includes("search")){
                    $("#data-wrapper").append(response.html);
                } else {
                    $("#data-wrapper2").append(response.html);
                }
                
                
                if (response.html.includes('Data is Empty')) {
            $('.load-more-data').hide();
          }
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }
    </script>

@endpush
