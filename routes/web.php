<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GetInTouchController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/',[MainController::class,'index']);
Route::post('/get-in-touch',[MainController::class,'store'])->name('get.in.touch.store');


Route::group(['prefix' => 'admin'], function(){
    Route::get('dashboard',[\App\Http\Controllers\AdminController::class,'dashboard']);
    Route::resource('get-in-touch',GetInTouchController::class);
    Route::resource('feedback',FeedbackController::class);
    Route::post('feedback_toggle',[FeedbackController::class,'feedback_toggle'])->name('feedback.toggle');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
