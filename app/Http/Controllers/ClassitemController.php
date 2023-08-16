<?php

namespace App\Http\Controllers;

use App\Models\Classitem;
use App\Models\Room;
use App\Models\Course;
use App\Models\User;
use App\Http\Requests\StoreClassitemRequest;
use App\Http\Requests\UpdateClassitemRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClassitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $studentoption = Student::all();
        $courseoption = Course::all();

        // if($request->has('coursesearchclassitem') || $request->has('studentsearchclassitem')){
            // $classitemIdsQuery = Classitem::where('course_id', $request->coursesearchclassitem)
            // ->orWhereHas('students', function ($query) use ($request) {
            //     $query->where('students.id', $request->studentsearchclassitem);
            // })
            // ->paginate(7)->withQueryString();

            // $classids = $classitemIdsQuery->pluck('id')->toArray();
            // $classitem = Classitem::where('name', 'like', '%' . $request->classitemsearch . '%')
            // ->whereIn('id',$classids)
            // ->paginate(7)->withQueryString();

        $classItemQuery = Classitem::query();
        $coursesearchclassitem = $request->coursesearchclassitem;
        $studentsearchclassitem = $request->studentsearchclassitem;


        if($coursesearchclassitem && $studentsearchclassitem) {
            $classItemQuery = $classItemQuery->where('course_id', $request->coursesearchclassitem)
                                ->whereHas('students', function ($query) use ($request) {
                                    $query->where('students.id', $request->studentsearchclassitem);
                                });
        } else {


            if($coursesearchclassitem) {
                $classItemQuery = $classItemQuery->where('course_id', $request->coursesearchclassitem);
            }

            if($studentsearchclassitem) {
                $classItemQuery = $classItemQuery->orWhereHas('students', function ($query) use ($request) {
                    $query->where('students.id', $request->studentsearchclassitem);
                });
            }
        }


        if($request->classitemsearch) {
            $classItemQuery = $classItemQuery->where('name', 'like', '%' . $request->classitemsearch . '%');
        }

        // $classids = $classitemIdsQuery->pluck('id')->toArray();

        $classitem =  $classItemQuery->orderBy('id', 'desc')->paginate(15)->withQueryString();


            // $classitem = $this->classitemfilter($classitem);
        // } else {
        //     $classitem =  Classitem::orderBy('id', 'desc')->paginate(7);
        // }

        if ($request->ajax()) {
            $view = view('classitem.data', compact('classitem'))->render();

            return response()->json(['html' => $view]);
        }

        return view('classitem.index', compact(['classitem','courseoption','studentoption']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Classitem::class);
        $roomoption = Room::all();
        $courseoption = Course::all();
        $lectureroption =  User::where('role_id', 2)->get();
        return view('classitem.create',compact(['roomoption','courseoption','lectureroption']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClassitemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassitemRequest $request)
    {
        $days = $request->days;
        $day_string = implode(', ', $days);
        $lecturerIds = $request->lecturer;

        $classitemId = Classitem::create([
            'name' => $request->name,
            'start_date' => $request->startdate,
            'end_date' => $request->enddate,
            'course_id' => $request->course,
            'start_time' => $request->starttime,
            'end_time' => $request->endtime,
            'room_id' => $request->room,
            'day' => $day_string,
            'price' => $request->price,
            'max_student' => $request->maxstudent,
            'container_color' => $request->color,
            'code' => $request->shortcode,
        ]);
        $classitemId->users()->attach($lecturerIds);

        // $noty = new Noty('success');
        // $noty->setTitle('Success');
        // $noty->setMessage('Your file has been uploaded successfully.');
        // $noty->show();

       return redirect()->back()->with('message','Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classitem  $classitem
     * @return \Illuminate\Http\Response
     */
    public function show(Classitem $classitem , Request $request)
    {
        $selectedStudent = $request->ss;
        $students = Student::all();
        return view('classitem.show', compact('classitem','students', 'selectedStudent'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classitem  $classitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Classitem $classitem)
    {
        $roomoption = Room::all();
        $courseoption = Course::all();
        $lectureroption =  User::where('role_id', 2)->get();
        return view('classitem.edit',compact(['classitem','courseoption','roomoption','lectureroption']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassitemRequest  $request
     * @param  \App\Models\Classitem  $classitem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassitemRequest $request, Classitem $classitem)
    {
        $this->authorize('update', $classitem);
        $days = $request->days;
        $day_string = implode(', ', $days);
        $lecturerIds = $request->lecturer;

        $classitemId = $classitem->update([
            'name' => $request->name,
            'start_date' => $request->startdate,
            'end_date' => $request->enddate,
            'course_id' => $request->course,
            'start_time' => $request->starttime,
            'end_time' => $request->endtime,
            'room_id' => $request->room,
            'day' => $day_string,
            'price' => $request->price,
            'max_student' => $request->maxstudent,
            'container_color' => $request->color,
            'code' => $request->shortcode,
        ]);

        $classitemId->users()->attach($lecturerIds);

        return redirect()->route('classitem.index')->with('message', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classitem  $classitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classitem $classitem)
    {
        $this->authorize('delete', $classitem);
        $classitem->delete();
        return redirect()->route('classitem.index')->with('del', 'Data is deleted');
    }

    public function classPayment(Classitem $classitem)
    {
        $payments = $classitem->payments()->get();
        $studentoption = Student::all();
        $courseoption = Course::all();
        $classitems = Classitem::all();
        $selectedStudent = $classitem;

        return view('classitem.classpayment' , compact(['classitems' , 'studentoption' , 'courseoption' ,'selectedStudent' , 'payments']));
    }

    public function classitemsearch(Request $request)
    {

        $output="";
        $classItemQuery =  Classitem::query();
        $coursesearchclassitem = $request->coursesearchclassitem;
        $studentsearchclassitem = $request->studentsearchclassitem;

        if($coursesearchclassitem && $studentsearchclassitem) {
            $classItemQuery = $classItemQuery->where('course_id', $coursesearchclassitem)
                                ->whereHas('students', function ($query) use ($studentsearchclassitem) {
                                    $query->where('students.id', $studentsearchclassitem);
                                });
        } else {

            if($coursesearchclassitem) {
                $classItemQuery = $classItemQuery->where('course_id', $coursesearchclassitem);
            }

            if($studentsearchclassitem) {
                $classItemQuery = $classItemQuery->orWhereHas('students', function ($query) use ($studentsearchclassitem) {
                    $query->where('students.id', $studentsearchclassitem);
                });
            }
        }

        if($request->classitemsearch) {
            $classItemQuery = $classItemQuery->where('name', 'like', '%' . $request->classitemsearch . '%')
            ->orWhereHas('course', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->classitemsearch . '%');
            })
            ->orWhereHas('users', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->classitemsearch . '%');
            });
        }

        $searchdata = $classItemQuery->orderBy('id', 'desc')->paginate(15)->withQueryString();

if(count($searchdata)>0){
    foreach($searchdata as $classdata)
    {
    $output .=
    '
    <tr>
      <td class="align-middle">
        <p class="d-none d-md-block text-cut">' .Str::limit($classdata->id,20). '</p>
        <div class="d-block d-md-none">
          <p>' . $classdata->name . '</p>
          <p class=" text-black-50 text-cut">'.Str::limit($classdata->users->pluck('name')->implode(', '),20).' </p>
        </div>
      </td>
      <td class="align-middle">'.Str::limit($classdata->course->name,20).'</td>
      <td class="d-none d-md-table-cell align-middle" >'.Str::limit($classdata->users->pluck('name')->implode(', '),20).' </td>
      ';
      $isUnpaid = false;
      foreach ($classdata->payments as $payment) {
      if ($payment->payment_type === "unpaid") {
      $isUnpaid = true;
      break;
      }
      }
      if ($isUnpaid) {
      $output .= '
      <td class=" align-middle">
        <div
          class="bg-danger pay-status d-flex justify-content-center align-items-center rounded">
          unpaid
        </div>
      </td>
      ';
      } else {
      $output .= '
      <td class=" align-middle">
        <div class="bg-success pay-status d-flex justify-content-center align-items-center rounded">
          paid
        </div>
      </td>
      ';
      }
      $output .= '<td class="d-none d-md-table-cell align-middle text-center">
      <a href="' . route('classitem.classPayment', $classdata->id) . '" class="btn table-btn-sm btn-primary">
          <i class="mdi mdi-credit-card-multiple h5"></i>
      </a>
    </td>';
    $output .= '<td class="text-end align-middle text-nowrap">
        <div class="d-none d-md-block control-btns">';
        $output .= '<a href="' . route('classitem.edit', $classdata) . '" class="btn table-btn-sm btn-primary">
        <i class="mdi mdi-pencil h5"></i>
    </a>';
    $output .= '<a href="' . route('classitem.show', $classdata) . '" class="btn table-btn-sm btn-primary">
    <i class="mdi mdi-information-outline h5"></i>
    </a>';
    $output .= '<form action="' . route('classitem.destroy', $classdata->id) . '" method="post" class="d-inline">
    <input type="hidden" name="_token" value="' . csrf_token() . '">
    <input type="hidden" name="_method" value="delete">
    <button type="submit" class="btn table-btn-sm btn-danger del-btn alertbox">
        <i class="mdi mdi-delete h5 text-white"></i>
    </button>
    </form>';
    $output .= '</div>

    <div class="btn-group dropup d-block d-md-none control-btn">
        <button type="button" class="btn table-btn-sm btn-outline-dark border border-0 dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-dots-vertical h4"></i>
        </button>

        <ul class="dropdown-menu mb-1">
            <div class="d-flex justify-content-around">
                <li>
                    <a href="' . route('classitem.edit', $classdata) . '" class="btn table-btn-sm btn-outline-primary border border-0">
                        <i class="mdi mdi-pencil h5"></i>
                    </a>
                </li>
                <li>
                    <form action="' . route('classitem.destroy', $classdata->id) . '" method="post" class="d-inline">
                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn table-btn-sm btn-outline-danger border border-0 alertbox">
                            <i class="mdi mdi-delete h5 "></i>
                        </button>
                    </form>
                </li>
                <li>
                    <a href="' . route('classitem.show', 'detail') . '" class="btn table-btn-sm btn-outline-secondary border border-0">
                        <i class="mdi mdi-information-outline h4"></i>
                    </a>
                </li>
            </div>
        </ul>
    </div>
    </td></tr>';
}
} else {
    $output .= '<tr>
    <td colspan="6" class="text-center text-danger">Data Not Found</td>
</tr>';
}


// return response($output);
// if ($request->ajax()) {
//     $view = view('classitem.data', compact('searchdata'))->render();

//     $data =  response()->json(['html' => $view]);
// }

    return response($output);

    }

    public function classitemfilter($searchdata)
    {
        $output="";
        if(count($searchdata)>0){
            foreach($searchdata as $classdata)
            {
            $output .=
            '
            <tr>
              <td class="align-middle">
                <p class="d-none d-md-block text-cut">' .Str::limit($classdata->name,20). '</p>
                <div class="d-block d-md-none">
                  <p>' . $classdata->name . '</p>
                  <p class=" text-black-50 text-cut">'.Str::limit($classdata->users->pluck('name')->implode(', '),20).' </p>
                </div>
              </td>
              <td class="align-middle">'.Str::limit($classdata->course->name,20).'</td>
              <td class="d-none d-md-table-cell align-middle" >'.Str::limit($classdata->users->pluck('name')->implode(', '),20).' </td>
              ';
              $isUnpaid = false;
              foreach ($classdata->payments as $payment) {
              if ($payment->payment_type === "unpaid") {
              $isUnpaid = true;
              break;
              }
              }

              if ($isUnpaid) {
              $output .= '
              <td class=" align-middle">
                <div
                  class="bg-danger pay-status d-flex justify-content-center align-items-center rounded">
                  unpaid
                </div>
              </td>
              ';
              } else {
              $output .= '
              <td class=" align-middle">
                <div class="bg-success pay-status d-flex justify-content-center align-items-center rounded">
                  paid
                </div>
              </td>
              ';
              }
              $output .= '<td class="d-none d-md-table-cell align-middle text-center">
              <a href="' . route('classitem.classPayment', $classdata->id) . '" class="btn table-btn-sm btn-primary">
                  <i class="mdi mdi-credit-card-multiple h5"></i>
              </a>
            </td>';
            $output .= '<td class="text-end align-middle text-nowrap">
                <div class="d-none d-md-block control-btns">';
                $output .= '<a href="' . route('classitem.edit', $classdata) . '" class="btn table-btn-sm btn-primary">
                <i class="mdi mdi-pencil h5"></i>
            </a>';
            $output .= '<a href="' . route('classitem.show', $classdata) . '" class="btn table-btn-sm btn-primary">
            <i class="mdi mdi-information-outline h5"></i>
            </a>';
            $output .= '<form action="' . route('classitem.destroy', $classdata->id) . '" method="post" class="d-inline">
            <input type="hidden" name="_token" value="' . csrf_token() . '">
            <input type="hidden" name="_method" value="delete">
            <button type="submit" class="btn table-btn-sm btn-danger del-btn alertbox">
                <i class="mdi mdi-delete h5 text-white"></i>
            </button>
            </form>';
            $output .= '</div>

            <div class="btn-group dropup d-block d-md-none control-btn">
                <button type="button" class="btn table-btn-sm btn-outline-dark border border-0 dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical h4"></i>
                </button>

                <ul class="dropdown-menu mb-1">
                    <div class="d-flex justify-content-around">
                        <li>
                            <a href="' . route('classitem.edit', $classdata) . '" class="btn table-btn-sm btn-outline-primary border border-0">
                                <i class="mdi mdi-pencil h5"></i>
                            </a>
                        </li>
                        <li>
                            <form action="' . route('classitem.destroy', $classdata->id) . '" method="post" class="d-inline">
                                <input type="hidden" name="_token" value="' . csrf_token() . '">
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn table-btn-sm btn-outline-danger border border-0 alertbox">
                                    <i class="mdi mdi-delete h5 "></i>
                                </button>
                            </form>
                        </li>
                        <li>
                            <a href="' . route('classitem.show', 'detail') . '" class="btn table-btn-sm btn-outline-secondary border border-0">
                                <i class="mdi mdi-information-outline h4"></i>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
            </td></tr>';
        }
        } else {
            $output .= '<tr>
            <td colspan="6" class="text-center text-danger">Data Not Found</td>
        </tr>';
        }


            return response($output);


    }
}
