<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MattressController;
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

//Route pour la homepage
Route::get('/home', [HomeController::class, 'index']);



//Route vers l'index des matelas
Route::get('/matelas', [MattressController::class, 'index']);

//Route pour view de chaque matelas
Route::get('/matelas/{id}-{slug}', [MattressController::class, 'show']);

//Routes pour création nouveau matelas (on crée puis ensuite on envoi à la bdd, d'où le GET puis le POST)
Route::get('/matelas/nouveau', [MattressController::class, 'create']);
Route::post('/matelas/nouveau', [MattressController::class, 'store']);

//Routes pour modification matelas (Idem)
Route::get('/matelas/{id}/modifier', [MattressController::class, 'edit']);
Route::post('/matelas/{id}/modifier', [MattressController::class, 'update']);

//Route de la suppression 
Route::get('/matelas/{id}/supprimer', [MattressController::class, 'destroy']);



