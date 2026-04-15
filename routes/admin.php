<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('/',function(){
    return view('admin.dashboard');
})->name('dashboard'); 

Route::resource('roles', RoleController::class)->except(['show']);
Route::resource('users', UserController::class)->except(['show']);