<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('register',[AuthController::class, 'register']);
Route::post('login',[AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource("products",ProductController::class);

});

//check current authenticated user
Route::get('/user', function (Request $request) {
    return Auth::user();
})->middleware('auth:sanctum');
