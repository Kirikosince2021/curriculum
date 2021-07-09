<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\dbController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main',[dbController::class,'index'])->middleware('auth');
Route::post('/main',[dbController::class,'input']);
Route::get('/main/delete',[dbController::class,'delete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
