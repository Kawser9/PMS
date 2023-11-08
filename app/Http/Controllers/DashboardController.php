<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
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
    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }
}
