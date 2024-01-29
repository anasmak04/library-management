<?php

use App\Http\Controllers\EmpruntController;
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
Route::get("/store", [LivreController::class , "create"])->name("livre.add");
Route::post("/", [LivreController::class, "store"])->name("livre.store");

// Emprunt
Route::get("/emprunt", [EmpruntController::class, "add"])->name("emprunt.add");
Route::post("/emprunt", [EmpruntController::class, "store"])->name("emprunt.store");

// Livre
Route::get("/{livre}", [LivreController::class, "edit"])->name("livre.edit");
Route::get("/emprunt", [EmpruntController::class, "showbooks"]);
Route::put("/{livre}/edit", [LivreController::class, "update"])->name("livre.update");
Route::delete("/{livre}", [LivreController::class, "destroy"])->name("livre.delete");
