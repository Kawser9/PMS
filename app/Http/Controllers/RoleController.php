<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function list()
    {
        $roles=Role::all();
        return view('backend.pages.role.list',compact('roles'));
    }
    public function create()
    {
        return view('backend.pages.role.create');
    }
    public function store(Request $request)
    {
        $request->validate([

        ]);
        Role::create
        ([
            'name'=>$request->name,
        ]);
        return redirect()->back();
    }
}
