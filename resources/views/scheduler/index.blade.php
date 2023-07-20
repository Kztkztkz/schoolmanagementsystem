@extends('layout.template')

@section('custom')
    <link rel="stylesheet" href="{{ asset('css/scheduler.css') }}">
@endsection

@section('content')
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
                    <div class=" fw-bold mx-3">{{ $monthArr[0]->format('Y-M')  }} ~ {{ $monthArr[6]->format('Y-M')  }}</div>
                    <a href="{{ route('schedular.nextMonth' , $monthArr[6]->format('Y-M-d') ) }}" class="btn btn-light" id="nextMonth">

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

                    <table class=" table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                @foreach ($monthArr as $month)
                                    <th class=" fs-4 fw-bolder text-end py-0"> {{ $month->format('M') }} </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($timeArr as $time)
                                <tr>
                                    <td class="time-fs text-end"> {{ $time }} </td>
                                    @foreach ($monthArr as $i)
                                        <td></td>
                                    @endforeach
                                </tr>
                            @endforeach

                        </tbody>

                        <tbody>
                            <tr>
                                <td  colspan="8"><div class="p-0 week-line"></div></td>
                            </tr>
                        </tbody>

                        <tbody >

                            @foreach ($timeArr as $time)
                                <tr>
                                    <td class="time-fs text-end"> {{ $time }} </td>
                                    @foreach ($monthArr as $i)
                                        <td></td>
                                    @endforeach
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
