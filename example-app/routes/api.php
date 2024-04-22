<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LoanController;

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
/** Default
* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
*     return $request->user();
* });
 */

// USERS
Route::get('test',function() {
    dd('test');
});

Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);
Route::post('users/store',[UserController::class,'store']);

Route::put('users/{id}',[UserController::class,'update']);
// Route::delete('users/{id}',[UserController::class,'delete']);
Route::delete('users/{id}',[UserController::class,'destroy']);

// AUTHORS
Route::get('authors',[AuthorController::class,'index']);
Route::get('authors/{id}',[AuthorController::class,'show']);
Route::post('authors/store',[AuthorController::class,'store']);
Route::post('authors/storeWImage',[AuthorController::class,'storeWImage']);
Route::put('authors/{id}',[AuthorController::class,'update']);
Route::delete('authors/{id}',[AuthorController::class,'destroy']);
// Route::resource('authors/index',[AuthorController::class,'view']);

// GENRES
Route::get('genres',[GenreController::class,'index']);
Route::delete('genres/{id}',[GenreController::class,'destroy']);
Route::delete('genres/hardDelete',[AuthorController::class,'hardDelete']);

// LOANS
Route::get('loans',[LoanController::class,'index']);
Route::get('loans/{id}',[LoanController::class,'show']);
Route::get('loans/showByCustomerId/{customer_id}',[LoanController::class,'showByCustomerId']);

