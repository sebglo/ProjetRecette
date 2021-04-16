<?php

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

/* Route::get('/', function () {
    return view('welcome');
}); */

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecetteController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/recette', [RecetteController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/recettes/{url}',[RecetteController::class, 'show']);

Route::get('admin/edit/{url}',[RecetteController::class, 'edit']);
Route::get('admin/delete/{url}',[RecetteController::class, 'delete']);

Route::post('/inscription', [ContactController::class, 'store']);

Route::resource('admin', RecetteController::class);

//Route::post('admin/storee', [RecetteController::class, 'storee']);

//Route::get('/admin/{url}',[RecetteController::class, 'store']);

/* Route::get('/admin/edit', function () {
    return view('/admin/edit');
}); */

Route::get('/adminread', [RecetteController::class, 'read']);
Route::get('/adminedit/{url}', [RecetteController::class, 'edit']);


