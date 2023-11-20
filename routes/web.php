<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ChangementMDPController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GangsController;
use App\Http\Controllers\PersonnagesController;
use App\Http\Controllers\RegionsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsersController;
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
    return view('front.accueil');
});

Auth::routes();


// Routes pour le BackOffice

Route::middleware(['auth'])->group(function () {
    Route::resource('/articles-admin', ArticlesController::class);
    Route::resource('/gangs-admin', GangsController::class);
    Route::resource('/personnages-admin', PersonnagesController::class);
    Route::resource('/regions-admin', RegionsController::class);
    Route::resource('/changementMDP', ChangementMDPController::class);
    Route::resource('/profil', UsersController::class);
    Route::get('/home', [Controller::class, 'getOne'])->name('home');
});

// Routes pour le FrontOffice


// Obtenir la page d'accueil
Route::get('/accueil', function () {
    return view('front.accueil');
});

// Obtenir la page Histoire
Route::get('/histoire', function () {
    return view('front.histoire');
});

// Obtenir la page Personnages et la fonction charactersIndex dans le fichier Controller
Route::get('/les-personnages', [Controller::class, 'charactersIndex'])->name('front.personnages');

// Obtenir la page Un Personnage pour afficher un seul personnage
Route::get('/un-personnage/{id}', [Controller::class, 'oneCharacter'])->name('front.unPersonnage');

// Obtenir la page Gangs et la fonction index dans le fichier Controller.php
Route::get('/les-gangs', [Controller::class, 'gangsIndex'])->name('front.gangs');

// Obtenir la page Régions et la fonction regionsIndex dans le fichier Controller.php
Route::get('/les-regions', [Controller::class, 'regionsIndex'])->name('front.regions');

// Obtenir la page Blog et la fonction blogIndex dans le fichier Controller
Route::get('/blog', [Controller::class, 'blogIndex'])->name('front.blog');

// Obtenir la page unArticle et la fonction oneArticle dans le fichier Controller
Route::get('/un-article/{id}', [Controller::class, 'oneArticle'])->name('front.unArticle');

// Obtenir la page Contact
Route::get('/contact', function () {
    return view('front.contact');
});
Route::post('/contact-envoi', [ContactController::class, 'sendEmail'])->name('contact.envoi');

// Obtenir la page politique de confidentialité
Route::get('/politique-de-confidentitalite', function () {
    return view('front.politiquedeconfidentialite');
});

// Obtenir la page mentions légales
Route::get('/mentions-legales',  function () {
    return view('front.mentionslegales');
});
