<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class,'index'])->middleware('auth');
Route::get('/dashboard',[HomeController::class,'dashboard']);

Route::middleware('guest')->group(function () {
    Route::get('/register',[RegisteredUserController::class,'create'])->name('register');
    Route::post('/register',[RegisteredUserController::class,'store']);

    Route::get('/login',[SessionController::class,'create'])->name('login');;
    Route::post('/login',[SessionController::class,'store']);
});
//Route::get('/schedule/docSchedule',[HomeController::class,'docSchedule'])->name('docSchedule')->middleware('auth');
Route::get('/schedule/docSchedule', [HomeController::class, 'docSchedule'])->name('schedule.docSchedule')->middleware('auth');;

Route::get('/schedule/docSchedulefell',[HomeController::class,'docSchedulefell'])->name('docSchedulefell')->middleware('auth');
Route::get('/schedule/{patient}/AppointmentCreate',[HomeController::class,'AppointmentCreate'])->name('AppointmentCreate')->middleware('auth');
Route::post('/schedule/docScheduleFellIn', [HomeController::class, 'docScheduleFellIn'])->name('docScheduleFellIn')->middleware('auth');
Route::get('/schedule/{appointment}/AppointmentEdit', [HomeController::class, 'AppointmentEdit'])
    ->name('schedule.AppointmentEdit')
    ->middleware('auth');
Route::put('/schedule/{appointment}/AppointmentUpdate', [HomeController::class, 'AppointmentUpdate'])
    ->name('schedule.AppointmentUpdate')
    ->middleware('auth');

Route::delete('/schedule/{appointment}/AppointmentDelete',[HomeController::class,'AppointmentDelete'])
    ->name('schedule.AppointmentDelete')
    ->middleware('auth');


Route::delete('/logout',[SessionController::class,'destroy'])->name('logout')->middleware('auth');
