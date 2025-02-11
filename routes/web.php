<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TechController;
use App\Http\Controllers\MathController;
use  App\Http\Controllers\HandleRequestController;

Route::get('/', function () {
    return view('home');
});


Route::get('muskaan', function () {
    return view('about');
});

Route::get('chd', function () {
    return view('contact');
});

Route::get('tech',[TechController::class,'Geetika']);
Route::get('delhi',[TechController::class,'Punjab_Pages']);
Route::get('addition',[MathController::class,'Sum_App']);
Route::post('sum_cal',[MathController::class,'Sum_cal']);
Route::any('subtract',[HandleRequestController::class,"Calauclation"]);


