<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Carbon\CarbonPeriod;
use DateInterval;
use DatePeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Classitem;


use function PHPSTORM_META\type;

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

    // public function index(){

    //     $period = CarbonPeriod::create('2023-06-14', '2023-12-20');
    //     $i = 6;


    //     // Iterate over the period
    //     foreach ($period as $date) {
    //         echo $date->format('m');
    //     }

    //     // Convert the period to an array of dates
    //     $dates = $period->toArray();


    // }





    public static function index()
    {

        $currentDate = Carbon::today()->startOfMonth();
        $dateDiff  = Carbon::today()->addMonths(5);


        $period = CarbonPeriod::create($currentDate , $dateDiff , '1 month');

        $monthArr = $period->toArray();

        $currentTime = Carbon::create(2023 , 7 , 19 , 7 );
// dd($currentTime);
        $timeArr = [];

        for($i=0 ; $i<=12 ; $i++){
            $time = $currentTime->addHours(1)->format('h:i a');
            array_push($timeArr , $time);
        }

        $data = Classitem::orderBy('start_date','desc')->get();

        return view('scheduler.index' , compact(['monthArr' , 'timeArr', 'data']));



        // $monthArr = [];
        // $addMonth = 6;
        // for ($i = 0; $i <= $addMonth ; $i++) {
        //     $month = Carbon::today()->addMonths($i)->format('M');
        //     $year = Carbon::today()->addMonths($i)->format('Y');
        //     array_push($monthArr, array(
        //         'month' => $month,
        //         'year' => $year
        //     ));
        // };





        // $currentTime = Carbon::create(2023 , 7 , 18 , 7 );

        // $timeArr = [];

        // for($i=0 ; $i<=12 ; $i++){
        //     $time = $currentTime->addHours(1)->format('h:i a');
        //     array_push($timeArr , $time);
        // }



        // return view('scheduler.index', compact(['monthArr' , 'timeArr']));
    }


    public function nextMonth($from ){

        $currentDate = Carbon::create($from);
        $dateDiff = $currentDate->addMonths(5);
        // dd($from , $dateDiff);

        $period = CarbonPeriod::create( $from , $dateDiff , '1 month');

        // return $period;

        $monthArr = $period->toArray();


        $currentTime = Carbon::create(2023 , 7 , 19 , 7 );
        $timeArr = [];

        for($i=0 ; $i<=12 ; $i++){
            $time = $currentTime->addHours(1)->format('h:i a');
            array_push($timeArr , $time);
        }
        $data = Classitem::orderBy('start_date','desc')->get();
        return view('scheduler.index', compact(['monthArr' , 'timeArr','data']));


    }

    public function preMonth($from){

        $currentDate = Carbon::create($from);
        $dateDiff = $currentDate->subMonths(5);
        // dd($from , $dateDiff);

        $period = CarbonPeriod::create( $dateDiff ,$from ,  '1 month');

        // return $period;

        $monthArr = $period->toArray();


        $currentTime = Carbon::create(2023 , 7 , 19 , 7 );
        $timeArr = [];

        for($i=0 ; $i<=12 ; $i++){
            $time = $currentTime->addHours(1)->format('h:i a');
            array_push($timeArr , $time);
        }
        $data = Classitem::orderBy('start_date','desc')->get();
        return view('scheduler.index', compact(['monthArr' , 'timeArr','data']));
    }

}
