<?php

use App\Http\Controllers\LivreController;
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

/// Livre
Route::get("/", [LivreController::class , "index"])->name("index");
Route::get("/store", [LivreController::class , "addview"])->name("livre.add");
Route::post("/", [LivreController::class, "store"])->name("livre.store");
Route::get("/{livre}", [LivreController::class, "editview"])->name("livre.edit");
Route::put("/{livre}/edit", [LivreController::class, "update"])->name("livre.update");
Route::delete("/{livre}", [LivreController::class, "destroy"])->name("livre.delete");
