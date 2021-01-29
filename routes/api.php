<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JwtAuthController;

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

Route::middleware('auth:api')->post('/register', [JwtAuthController::class, 'register']);
Route::middleware('auth:api')->post('/login', [JwtAuthController::class, 'login']);
Route::middleware('auth:api')->post('/logout', [JwtAuthController::class, 'signout']);

Route::middleware('auth:api')->get('/user', [JwtAuthController::class, 'user']);

Route::middleware('auth:api')->post('/update', [JwtAuthController::class, 'update']);

Route::middleware('auth:api')->post('/transaction', [JwtAuthController::class, 'transaction']);

Route::middleware('auth:api')->post('/token-refresh', [JwtAuthController::class, 'refresh']);
