<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::name('users.')
->controller(UserController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/inscription','inscription')->name('inscription');
    Route::post('sotre','store')->name('store');
    
    Route::get('liste/','users')->name('users');
    Route::get('delete/{id}','delete')->name('delete');
    Route::post('update/{id}','update')->name('update');
    
});