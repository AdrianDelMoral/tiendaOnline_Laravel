<?php

use App\Http\Controllers\Api\AddressApiController;
use App\Http\Controllers\Api\CartLineApiController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\ImageApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('/direccion', AddressApiController::class);

// Route::apiResource('/agregarProducto', ProductApiController::class)->only("store");
// Route::apiResource('/borrarProducto', ProductApiController::class)->only("destroy")->parameters(["borrarProducto"=> "requests"]);


Route::apiResource('/agregarCategoria', CategoryApiController::class)->only("store");
Route::put("/productos/deshabilitar/{product}", [ProductApiController::class, "deshabilitar"]);
Route::apiResource("/image", ImageApiController::class);
Route::apiResource('/productos', ProductApiController::class)->parameters(['productos' => 'product']);
Route::apiResource('/categorias', CategoryApiController::class)->parameters(['categorias' => 'category']);
Route::apiResource("/carrito", CartLineApiController::class)->parameters(['carrito' => 'cartline']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
