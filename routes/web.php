<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GetInTouchController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('dashboard',[\App\Http\Controllers\AdminController::class,'dashboard']);
    Route::resource('get-in-touch',GetInTouchController::class);
    Route::resource('feedback',FeedbackController::class);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
