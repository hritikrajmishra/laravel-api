<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('posts',PostController::class);

// // this  api for read data
// Route::get('/posts',[PostController::class,'index']);
// // this api for create data 
// Route::post('/posts',[PostController::class,'store']);
// // this route for shoe data
// Route::get('/posts/{post}',[PostController::class,'show']);
// // this api route for update the data
// Route::put('/posts/{post}',[PostController::class,'update']);
// // this api route for delete th data
// Route::delete('/posts/{post}',[PostController::class,'destroy']);