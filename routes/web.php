<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/login',[DashboardController::class,'adminLogin'])->name('admin.login');
Route::post('/do/admin/login',[DashboardController::class,'doLogin'])->name('do.login');


Route::group(['middleware'=>'auth'],function(){

    Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');

    // Role
    Route::get('/role-list',[RoleController::class,'list'])->name('role.list');
    Route::get('/role-create',[RoleController::class,'create'])->name('role.create');
    Route::post('/role-store',[RoleController::class,'store'])->name('role.store');

    // Assign role
    Route::get('/role-asign', [RoleController::class, 'roleAssign'])->name('role.assign');
    Route::get('/role-asign/{role_id}', [RoleController::class, 'roleAssign'])->name('role.assign');
    Route::post('/assign-permission/{role_id}', [RoleController::class, 'assingPermission'])->name('assign.permission');

    //User
    Route::get('/user-list',[UserController::class,'list'])->name('user.list');
    Route::get('/user-create',[UserController::class,'create'])->name('user.create');
    Route::post('/user-store',[UserController::class,'store'])->name('user.store');
    
});

