<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function list()
    {
        $users=User::with('role_name')->get();
        return view('backend.pages.user.list',compact('users'));
    }
    public function create()
    {
        $role=Role::all();
        return view('backend.pages.user.create',compact('role'));
        
    }
    public function store(Request $request)
    {
        $request->validate([

        ]);
        // dd($request->all());
        User::create
        ([
            'name'=>$request->name,
            'role_id'=>$request->role_id,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        return redirect()->back();
    }

    public function adminLogin()
    {
        return view('backend.login');
    }
    public function doLogin(Request $request)
    {
        $request->validate
        ([
            'email'      =>'required|email',
            'password'   =>'required'
        ]);
        if(auth()->attempt(request()->only(['email','password'])))
        {
            return redirect()->route('dashboard');
        }
            return redirect()->route('admin.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
