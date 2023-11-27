<?php

use App\Http\Controllers\CategoryController;
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

Route::group(['prefix'=>'/admin'],function(){

    Route::get('/login',[UserController::class,'adminLogin'])->name('admin.login');
    Route::post('/do/login',[UserController::class,'doLogin'])->name('do.login');



    Route::group(['middleware'=>'auth'],function(){

        Route::get('/logout',[UserController::class,'logout'])->name('logout');

        Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');

        // Role
        Route::get('/role-list',[RoleController::class,'list'])->name('role.list');
        Route::get('/role-create',[RoleController::class,'create'])->name('role.create');
        Route::post('/role-store',[RoleController::class,'store'])->name('role.store');


        // Category
        Route::get('/category-list',[CategoryController::class,'list'])->name('category.list');
        Route::get('/category-create',[CategoryController::class,'create'])->name('category.create');
        Route::post('/category-store',[CategoryController::class,'store'])->name('category.store');

        // Assign role
        Route::get('/role-asign', [RoleController::class, 'roleAssign'])->name('role.assign');
        Route::get('/role-asign/{role_id}', [RoleController::class, 'roleAssign'])->name('role.assign');
        Route::post('/assign-permission/{role_id}', [RoleController::class, 'assingPermission'])->name('assign.permission');

        //User
        Route::get('/user-list',[UserController::class,'list'])->name('user.list');
        Route::get('/user-create',[UserController::class,'create'])->name('user.create');
        Route::post('/user-store',[UserController::class,'store'])->name('user.store');
        
    });
});

