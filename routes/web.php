<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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

/* Usuarios */
//Route::get("/users")

/* Catalogo */
Route::get("/catalogo/gestionar", [ProductController::class, 'gestionar'])->name("gestionar");
Route::resource('/catalogo', ProductController::class)->parameters(["catalogo"=> "product"]);

/* panel de admin */
//Route::middleware(['auth:sanctum', 'verified'])->resource('/admin', AdminController::class);

Route::group(['prefix' => '/admin'], function () {
    Voyager::routes();
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
