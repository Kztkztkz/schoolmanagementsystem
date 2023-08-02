@extends('layout.template')

@section('custom')
    <link rel="stylesheet" href="{{ asset('css/scheduler.css') }}">
@endsection

@section('content')

<input type="hidden" id="scheduler" value="{{json_encode($data)}}" />
{{-- dd({{$data}}) --}}
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12  d-flex justify-content-between">
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Class</a></li>
                            <li class="breadcrumb-item active " aria-current="page">List</li>
                            <li class="breadcrumb-item active " aria-current="page"></li>
                        </ol>
                    </nav>
                </div>

                <div class="d-flex justify-content-center align-items-center bg-light shadow-sm ">
                    <a href="{{ route('schedular.preMonth' , $monthArr[0]->format('Y-M-d') ) }}" class="btn btn-light " id="nextMonth">
                        <i class=" mdi mdi-arrow-left"></i>


                    </a>
                    <div class=" fw-bold mx-3">{{ $monthArr[0]->format('Y-M')  }} ~ {{ $monthArr[5]->format('Y-M')  }}</div>
                    <a href="{{ route('schedular.nextMonth' , $monthArr[5]->format('Y-M-d') ) }}" class="btn btn-light" id="nextMonth">

                        <i class=" mdi mdi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row  px-3 " >
        <div class="col-2">
            <div class="card ">
                <div class="card-body position-relative">
                    <p class="  fs-4 mb-2 text-center">Student Filter</p>

                    <form action="">
                        <div class=" mb-3">
                            <label for="">Course</label>
                            <select class="select2  form-select shadow-none" style="width: 100%; height:36px;">
                                <option>Select Course</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Class</label>
                            <select class="select2  form-select shadow-none">
                                <option>Select Class</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-center align-items-center ">
                            <div class="position-absolute filterbtn">
                                <button class="btn btn-secondary me-2" type="submit">Cancel</button>
                                <button class="btn btn-primary " type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-10">
            <div class="card rounded-3 ">
                <div class="card-body">

                    <div class="" style="
                        width: 100%;
                        height: 100%;
                        display: block;
                        position: relative;
                    ">
     
                        <div style="display: flex">
                            <div style="width:100%; border-right: 1px solid #a9aeb3; border-bottom: 1px solid #a9aeb3;height: 40px;"></div>
                                @foreach ($monthArr as $month)
                                    <div class=" fs-4 fw-bolder text-end py-0"  style="width:100%;flex-grow: 1;border-right: 1px solid #a9aeb3; border-bottom: 1px solid #a9aeb3;height: 40px; display: flex; justify-content: center; align-items: center;"> {{ $month->format('M') }} </div>
                                @endforeach
                            </div>
                      
                

                            @foreach ($timeArr as $time)
                                <div style="display: flex;">
                                    {{-- <div class="time-fs" style="border-right: 1px solid #a9aeb3;  border-bottom: 1px solid #a9aeb3;height: 15px; flex-grow: 1; justify-content: center; align-items: center;"> 
                                     ww
                                    </div> --}}
                                    <div style="width:100%; border-right: 1px solid #a9aeb3; border-bottom: 1px solid #a9aeb3;height: 20px; text-align:center">
                                        {{$time}}
                                    </div>
                                    {{-- <div class="sch-inner" style="display: flex;">

                                        @foreach ($monthArr as $month)
                                       
                                            <div  style=" border-right: 1px solid #a9aeb3; border-bottom: 1px solid #a9aeb3;height: 15px; display: flex; justify-content: center; align-items: center; flex-grow: 1;">
                                            @foreach($data as $classitem)
                                            @php
                                            $monthdif =
                                            date('m', strtotime($classitem->end_date)) - date('m', strtotime($classitem->start_date));
                                            $timedif = date('H', strtotime($classitem->end_time)) - date('H', strtotime($classitem->start_time));
                                            $tablemonth = date('m', strtotime($month))+1;
                                            $tablehour = date('H',strtotime($time))+1;
                                           
                                            @endphp
                                        @for($i = -1; $i < $monthdif; $i++)
                                        @php
                                        $tablemonth--;
                                        $monthstring = sprintf('%02d', $tablemonth);
                                        $tablehour = "";
                                        $tablehour = date('H',strtotime($time))+1;

                                        @endphp
                                        @for($j = -1;$j < $timedif; $j++)
                                        @php
                                        $tablehour--;
                                        $hourstring = sprintf('%02d', $tablehour);
                                        
                                        @endphp
                                          @if($hourstring === date('H', strtotime($classitem->start_time)) && $monthstring === date('m', strtotime($classitem->start_date)) && date('Y', strtotime($month)) === date('Y', strtotime($classitem->start_date)))

                                          <div id="asdf"  style="width:100%; position:relative; border-right: 1px solid #a9aeb3; border-bottom: 1px solid #a9aeb3;height: 15px; display: flex; justify-content: center; align-items: center; background: red; border:1px solid red; color:white; ">
                                            @if($i == -1 && $j == -1)
                                            <span style="position: absolute;left:10; top:5px; z-index:1;" data-bs-placement="bottom" title="{{$classitem->name}}">
                                            {{$classitem->code}}</span>
                                            @endif
                                        </div>
                                          @endif
                                        @endfor
                                        @endfor
                                        
                                        @endforeach
                                            </div>

                                        @endforeach
                                    </div> --}}
                                    @foreach ($monthArr as $month)
                                    <div class=" fs-4 fw-bolder text-end py-0"  style="width:100%;flex-grow: 1;border-right: 1px solid #a9aeb3; border-bottom: 1px solid #a9aeb3;height: 20px; display: flex; justify-content: center; align-items: center;">
                        
                                            @foreach($data as $classitem)
                                            @php
                                            $monthdif =
                                            date('m', strtotime($classitem->end_date)) - date('m', strtotime($classitem->start_date));
                                            $timedif = date('H', strtotime($classitem->end_time)) - date('H', strtotime($classitem->start_time));
                                            $tablemonth = date('m', strtotime($month))+1;
                                            $tablehour = date('H',strtotime($time))+1;
                                           
                                            @endphp
                                        @for($i = -1; $i < $monthdif; $i++)
                                        @php
                                        $tablemonth--;
                                        $monthstring = sprintf('%02d', $tablemonth);
                                        $tablehour = "";
                                        $tablehour = date('H',strtotime($time))+1;

                                        @endphp
                                        @for($j = -1;$j < $timedif; $j++)
                                        @php
                                        $tablehour--;
                                        $hourstring = sprintf('%02d', $tablehour);
                                        
                                        @endphp
                                          @if($hourstring === date('H', strtotime($classitem->start_time)) && $monthstring === date('m', strtotime($classitem->start_date)) && date('Y', strtotime($month)) === date('Y', strtotime($classitem->start_date)))

                                          <div id="asdf"  style="width:100%; position:relative; border-right: 1px solid #a9aeb3; border-bottom: 1px solid #a9aeb3;height: 20px; display: flex; justify-content: center; align-items: center; background: red; border:1px solid red; color:white; ">
                                            
                                            @if($i == -1 && $j == -1)
                                            <span style="margin-top: calc( 20px *  {{$timedif}}); z-index:1;" data-bs-placement="bottom" title="{{$classitem->name}}">
                                            {{$classitem->code}}</span>
                                            @endif
                                        </div>
                                          @endif
                                        @endfor
                                        @endfor
                                        
                                        @endforeach
                                          
                                     </div>
                                @endforeach
                                </div>
                            @endforeach

                      

                        <div>
                            <div>
                                <div  colspan="8"><div class="p-0 week-line"></div></div>
                            </div>
                        </div>

                        <div >
{{-- 
                            @foreach ($timeArr as $time)
                                <div>
                                    <div class="time-fs text-end"> {{ $time }} </div>
                                    @foreach ($monthArr as $i)
                                        <div></div>                                        
                                    @endforeach
                                </div>
                            @endforeach --}}

                            @foreach ($timeArr as $time)
                            <div style="display: flex">
                                <div style="width:100%; border-right: 1px solid #a9aeb3; border-bottom: 1px solid #a9aeb3;height: 20px;text-align :center">{{ $time }}</div>
                                    @foreach ($monthArr as $i)
                                        <div class=" fs-4 fw-bolder text-end py-0"  style="width:100%;flex-grow: 1;border-right: 1px solid #a9aeb3; border-bottom: 1px solid #a9aeb3;height: 20px; display: flex; justify-content: center; align-items: center;"> </div>
                                    @endforeach
                                </div>
                                @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
