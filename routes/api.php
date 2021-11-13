<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SucursalController;
use App\Http\Controllers\ProductoController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Begin App Routes
Route::apiResource('/producto',ProductoController::class);
Route::apiResource('/sucursal',SucursalController::class);
//End App Routes
