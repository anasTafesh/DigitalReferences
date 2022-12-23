<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


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

Route::middleware('auth:sanctum')->get('/user',[AuthController::class,'get_user']);
Route::post('/auth/login',[AuthController::class,'login']);
Route::post('/auth/register_user',[AuthController::class,'create_user']);
Route::middleware('auth:sanctum')->get('/logout',[AuthController::class,'logout']);