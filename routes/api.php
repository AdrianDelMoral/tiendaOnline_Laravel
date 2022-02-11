<?php

use App\Http\Controllers\Api\AddressApiController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\CategoryApiController;
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

Route::apiResource('/direccion', AddressApiController::class)->parameters(['direccion' => 'address']);
Route::apiResource('/agregarProducto', ProductApiController::class)->only("store");
Route::apiResource('/agregarCategoria', CategoryApiController::class)->only("store");
Route::apiResource('/productos', ProductApiController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
