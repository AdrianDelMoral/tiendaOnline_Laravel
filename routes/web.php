<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartLineController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddressController;
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
    return view('inicio');
}); */

/* Inicio */
Route::resource('/', InicioController::class)->parameters(["catalogo"=> "product"])->only('index');

/* categorias */
Route::resource('/categorias', CategoryController::class)->parameters(["categorias" => 'category']);
Route::resource('/direccion', AddressController::class)->parameters(["direccion"=> "address"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



