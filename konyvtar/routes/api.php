<?php

use App\Http\Controllers\LibUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/users',[LibUserController::class,'index']);
Route::get('/user/{id}',[LibUserController::class,'show']);
Route::post('/users',[LibUserController::class,'store']);
Route::put('/user/{id}', [LibUserController::class, 'update']);