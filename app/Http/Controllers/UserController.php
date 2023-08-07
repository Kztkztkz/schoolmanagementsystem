<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userdata = User::orderBy('id', 'desc')->paginate(7);
        $roles = Role::all();

        if($request->has('usersearch')){
            $userdata = User::where('name', 'like', '%' . $request->usersearch . '%')
            ->orWhere('email','like','%'.$request->usersearch.'%')
            ->orWhereHas('role', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->usersearch . '%');
            })
            ->paginate(7)->withQueryString();
        } else if($request->has('userrolefilter')){
            $userdata = User::where('role_id',$request->userrolefilter)->paginate(7)->withQueryString();
        }

        return view('user.index', compact(['userdata','roles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roleoptions = Role::all();
        return view('user.create', compact('roleoptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
        ]);

        return redirect()->back()->with('message','Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roleoptions = Role::all();
        return view('user.edit', compact(['user', 'roleoptions']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // User::update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'role_id' => $request->role,
        // ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role;
        $user->update();

        return redirect()->back()->with('message','Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('del', 'Data is deleted');
    }

    public function login(LoginUserRequest $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('schdeuler.index'));
        }

        return redirect()->route('auth.login')->with('err','Username or password incorrect');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('auth.login');
    }
}
