<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
Route::get('/', [Homecontroller::class,'index']);
Route::controller(LoginController::class)->group(function(){
Route::get('')
});