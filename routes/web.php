<?php

use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::middleware(["auth", "checkrole:admin"])->group(function (){
    Route::resource('utilisateurs', UserController::class);
});


Route::resource('livres', LivreController::class);


Route::resource('emprunts', EmpruntController::class)->only(['index', 'store', 'destroy']);


Route::middleware(["auth", "checkrole:admin,user"])->group(function (){
    Route::get('/emprunts/res', [EmpruntController::class, 'index'])->name('emprunts.reservation');
});



Route::get('/emprunts/add', [EmpruntController::class, 'add'])->name('emprunts.add');


Route::get('/home', [HomeController::class, 'index'])->name('home');
