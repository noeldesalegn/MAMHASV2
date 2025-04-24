<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class,'index']);

Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'login']);
Route::post('/login',[SessionController::class,'store']);
Route::delete('/logout',[SessionController::class,'destroy']);
