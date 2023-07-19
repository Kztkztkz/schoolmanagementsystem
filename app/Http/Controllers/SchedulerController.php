<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SchedulerController extends Controller
{
    // public static function buildMonth($year, $month)
    // {
    //     $startOfMonth = CarbonImmutable::now();
    //     $endOfMonth = $startOfMonth->endOfMonth();

    //     return [
    //         'year' => $startOfMonth->year,
    //         'month' => $startOfMonth->format('F'),
    //     ];
    // }



    public static function index()
    {
        $monthArr = [];
        for ($i = 0; $i <= 6; $i++) {
            $month = Carbon::today()->addMonths($i)->format('M');
            $year = Carbon::today()->addMonths($i)->format('Y');
            array_push($monthArr, array(
                'month' => $month,
                'year' => $year
            ));
        };




        $currentTime = Carbon::create(2023 , 7 , 18 , 7 );

        $timeArr = [];

        for($i=0 ; $i<=12 ; $i++){
            $time = $currentTime->addHours(1)->format('h:i a');
            array_push($timeArr , $time);
        }



        return view('scheduler.index', compact(['monthArr' , 'timeArr']));
    }
}
