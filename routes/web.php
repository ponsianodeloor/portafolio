<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\System\SystemController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/portafolio', function (){
    return view('portafolio');
});

Route::controller(SystemController::class)->group(function (){
    Route::get('/system', 'index')->name('system.index');
});
