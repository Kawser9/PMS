<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
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

    public function roleAssign($id){

        $role=Role::with('permissions')->find($id);

        $assignedPermissions=$role->permissions->pluck('permission_id')->toArray();
        // dd($assignedPermissions);
        $permissions=Permission::all();
        // dd($permissions);
        return view('backend.pages.role.assign',compact('permissions','role','assignedPermissions'));
    }
}
