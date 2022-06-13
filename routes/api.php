<?php

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

// PUBLIC ROUTES
Route::post('register', [\App\Http\Controllers\Auth\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\Auth\AuthController::class, 'login']);


// PROTECTED ROUTES
Route::middleware('auth:sanctum')->group(function() {
    Route::get('user', [\App\Http\Controllers\Auth\AuthController::class, 'user']);
    Route::post('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logOut']);
});
