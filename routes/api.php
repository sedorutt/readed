<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/athenticated', function () {
    return true;
});


Route::post('/login',[LoginController::class ,'login']);
Route::post('/logout',[LoginController::class ,'logout']);
Route::post('/register',[RegisterController::class,'register']);
Route::get('/books',[BookController::class ,'index']);
Route::post('/books',[BookController::class ,'store']);
Route::get('/books/{book}',[BookController::class ,'show']);
Route::put('/books/{book}' ,[BookController::class ,'update']);
Route::delete('/books/{book}',[BookController::class ,'destroy']);