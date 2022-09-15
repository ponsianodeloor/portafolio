<?php

use App\Http\Controllers\System\ProfileController;
use App\Http\Controllers\System\SystemController;
use App\Http\Controllers\System\PortafolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::controller(PortafolioController::class)->group(function (){
    Route::get('portafolio', 'index')->name('portafolio');
});

Route::controller(SystemController::class)->group(function (){
    Route::get('/system', 'index')->name('system.index');
});

Route::controller(ProfileController::class)->group(function (){
    Route::get('/system/profile', 'index')->name('system.profile.index');
});
