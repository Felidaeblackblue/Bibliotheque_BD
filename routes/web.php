<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;
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

Route::get('/', [NavController::class, 'accueil']);

Route::get('/list_caracter', [NavController::class,'list_caracter']);

Route::get('/ajout', [NavController::class,'ajout']);

Route::post('/addcaracter', [ActionController::class,'ajout']);

Route::post('/delete', [ActionController::class,'delete']);

Route::get('/update', [NavController::class,'update']);

Route::post('/modif/{id}', [ActionController::class, 'modification']);