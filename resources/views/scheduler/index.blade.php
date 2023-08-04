@extends('layout.template')

@section('custom')
    <link rel="stylesheet" href="{{ asset('css/scheduler.css') }}">
@endsection

@section('content')
    <input type="hidden" id="scheduler" value="{{ json_encode($data) }}" />
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
                    <a href="{{ route('schedular.preMonth', date_format(current($monthArr), 'Y-M-d')) }}"
                        class="btn btn-light " id="nextMonth">
                        <i class=" mdi mdi-arrow-left"></i>
                    </a>

                    <div class=" fw-bold mx-3">{{ date_format(current($monthArr), 'Y-M') }} ~
                        {{ date_format(end($monthArr), 'Y-M') }}</div>
                    <a href="{{ route('schedular.nextMonth', date_format(end($monthArr), 'Y-M-d')) }}" class="btn btn-light"
                        id="nextMonth">
                        <i class=" mdi mdi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="row py-4 px-3 ">

        

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

                    <div class="scheduler-container">

                        <div class="grid-container">
                            <div class="day-type">Weekdays</div>
                            <div class="d-flex months">
                                <div class=""
                                    style="width:100%; border-right: 1px solid #a9aeb3; border-bottom: 1px solid #a9aeb3;height: 40px;">
                                </div>
                                @foreach ($monthArr as $month)
                                    <div class="month-row fs-4 fw-bolder text-end py-0" style="">
                                        {{ $month->format('M') }} </div>
                                @endforeach
                            </div>                          
                            <div class="times">
                                @foreach ($timeArr as $time)
                                    <div class="d-flex">
                                        <div class="time-row">
                                            {{ $time }}
                                        </div>
                                        @foreach ($monthArr as $month)
                                        {{-- @dump($month->between("01-10-2023", "31-01-2024")) --}}
                                        {{-- {{$month->format('d-m-Y')}} --}}
                                            <div class=" fs-4 fw-bolder text-end py-0 sch-inner">

                                                @foreach ($data as $classitem)
                                                
                                                    @if ($classitem->type === 'weekdays')
                                                        @php
                                                        $start_date1 = new DateTime($classitem->start_date);
                                                $end_date1 = new DateTime($classitem->end_date);
                                                $difference = date_diff($start_date1, $end_date1);
                                                $monthdif = $difference->m;
                                          
                                                            $timedif = date('H', strtotime($classitem->end_time)) - date('H', strtotime($classitem->start_time));
                                                            $tablemonth = date('m', strtotime($month)) + 1;
                                                            $tablehour = date('H', strtotime($time)) + 1;

                                                        @endphp
                                                         @for ($i = -1; $i < $monthdif; $i++)
                                                            @php
                                                                $tablemonth--;
                                                                $monthstring = sprintf('%02d', $tablemonth);
                                                                $tablehour = '';
                                                                $tablehour = date('H', strtotime($time)) + 1;
                                                                
                                                            @endphp
                                                            {{-- @dump($monthdif) --}}
                                                            @for ($j = -1; $j < $timedif; $j++)
                                                                @php
                                                                    $tablehour--;
                                                                    $hourstring = sprintf('%02d', $tablehour);
                                                                    
                                                                    
                                                                @endphp
                                                                {{-- @dd($month, Carbon\Carbon::parse($classitem->start_date)->format('d-m-Y'), Carbon\Carbon::parse($classitem->end_date)->format('d-m-Y')) --}}
                                                                @if ($month->between(Carbon\Carbon::parse($classitem->start_date)->format('Y-m'), Carbon\Carbon::parse($classitem->end_date)->format('Y-m')) && $hourstring === date('H', strtotime($classitem->start_time)) )


                                                                        
                                                                    <div id="asdf" class="active-classitem"
                                                                        style=" background-color: {{ $classitem->container_color }}; border: 1px solid {{ $classitem->container_color }}; border-right: 1px solid {{ $classitem->container_color }}; border-bottom: 1px solid {{ $classitem->container_color }};"
                                                                        style="">

                                                                        @if ($i == -1 && $j == -1)
                                                                            <span
                                                                                style="margin-top: calc( 20px *  {{ $timedif }}); z-index:1;"
                                                                                data-bs-placement="bottom"
                                                                                title="{{ $classitem->name }}">
                                                                                {{ $classitem->code }}
                                                                            </span>
                                                                            @push('scripts')
                                                                                <script>
                                                                                    let activeColor = "@php echo $classitem->container_color @endphp";
                                                                                    $('.active-classitem').parent().css('border-right', activeColor);
                                                                                </script>
                                                                            @endpush
                                                                        @endif
                                                                    </div>
                                                                @endif
                                                            @endfor
                                                        @endfor
                                                    @endif
                                                @endforeach

                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <div>
                                <div colspan="8">
                                    <div class="p-0 week-line"></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-container">
                            <div class="day-type">Weekend</div>
                            <div class="months"></div>
                            <div class="times">
                                @foreach ($timeArr as $time)
                                    <div class="d-flex">

                                        <div class="time-row">
                                            {{ $time }}
                                        </div>

                                        @foreach ($monthArr as $month)
                                            <div class=" fs-4 fw-bolder text-end py-0 sch-inner">

                                                @foreach ($data as $classitem)
                           
                                                    @if ($classitem->type === 'weekend')
                                                        @php
                                                            $start_date1 = new DateTime($classitem->start_date);
                                                            $end_date1 = new DateTime($classitem->end_date);
                                                            $difference = date_diff($start_date1, $end_date1);
                                                            $monthdif = $difference->m;
                                                            $timedif = date('H', strtotime($classitem->end_time)) - date('H', strtotime($classitem->start_time));
                                                            $tablemonth = date('m', strtotime($month)) + 1;
                                                            $tablehour = date('H', strtotime($time)) + 1;

                                                        @endphp
                                                        @for ($i = -1; $i < $monthdif; $i++)
                                                            @php
                                                                $tablemonth--;
                                                                $monthstring = sprintf('%02d', $tablemonth);
                                                                $tablehour = '';
                                                                $tablehour = date('H', strtotime($time)) + 1;

                                                            @endphp
                                                            @for ($j = -1; $j < $timedif; $j++)
                                                                @php
                                                                    $tablehour--;
                                                                    $hourstring = sprintf('%02d', $tablehour);

                                                                @endphp
                                                                @if (
                                                                    $hourstring === date('H', strtotime($classitem->start_time)) &&
                                                                        $monthstring === date('m', strtotime($classitem->start_date)) &&
                                                                       (date('Y', strtotime($month)) === date('Y', strtotime($classitem->start_date)) || date('Y', strtotime($month)) === date('Y', strtotime($classitem->end_date))) )

                                                                    <div id="asdf" class="active-classitem"
                                                                        style=" background-color: {{ $classitem->container_color }}; border: 1px solid {{ $classitem->container_color }}; border-right: 1px solid {{ $classitem->container_color }}; border-bottom: 1px solid {{ $classitem->container_color }};"
                                                                        style="">

                                                                        @if ($i == -1 && $j == -1)
                                                                            <span
                                                                                style="margin-top: calc( 20px *  {{ $timedif }}); z-index:1;"
                                                                                data-bs-placement="bottom"
                                                                                title="{{ $classitem->name }}">
                                                                                {{ $classitem->code }}
                                                                            </span>
                                                                            @push('scripts')
                                                                                <script>
                                                                                    let activeColor = "@php echo $classitem->container_color @endphp";
                                                                                    $('.active-classitem').parent().css('border-right', activeColor);
                                                                                </script>
                                                                            @endpush
                                                                        @endif
                                                                    </div>
                                                                @endif
                                                            @endfor
                                                        @endfor
                                                    @endif
                                                @endforeach

                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection