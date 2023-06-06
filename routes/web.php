<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\GangsController;
use App\Http\Controllers\PersonnagesController;
use App\Http\Controllers\RegionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// Routes pour le BackOffice

Route::middleware(['auth'])->group(function(){
    Route::resource('/blog-admin', ArticlesController::class);
    Route::resource('/gangs-admin', GangsController::class);
    Route::resource('/personnages-admin', PersonnagesController::class);
    Route::resource('/regions-admin', RegionsController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

