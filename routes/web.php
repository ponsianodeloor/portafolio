<?php

use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\System\ProfileController;
use App\Http\Controllers\System\AboutController;
use App\Http\Controllers\System\FactController;
use App\Http\Controllers\System\SkillController;
use App\Http\Controllers\System\SystemController;
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

    Route::put('/system/profile/{id}', 'update')->name('system.profile.update');
});

Route::controller(AboutController::class)->group(function (){
    Route::get('/system/about', 'index')->name('system.about.index');

    Route::put('/system/about/{id}', 'update')->name('system.about.update');
    Route::put('/system/about/facts_description/{id}', 'updateFactsDescription')->name('system.about.updateFactsDescription');
    Route::put('/system/about/skills_description/{id}', 'updateSkillsDescription')->name('system.about.updateSkillsDescription');
});

Route::controller(FactController::class)->group(function (){
    Route::get('/system/about/facts', 'index')->name('system.about.facts.index');

    Route::post('system/about/facts/', 'store')->name('system.about.facts.store');
    Route::delete('system/about/facts/{id}', 'destroy')->name('system.about.facts.destroy');
    //Route::put('system/about/facts/{id}');
});

Route::controller(SkillController::class)->group(function (){
    Route::get('/system/about/skills', 'index')->name('system.about.skills.index');

    Route::post('system/about/skills/', 'store')->name('system.about.skills.store');
    Route::delete('system/about/skills/{id}', 'destroy')->name('system.about.skills.destroy');
});
