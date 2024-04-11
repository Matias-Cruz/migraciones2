<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


// Route::get('users',[UserController::class,'index']);
Route::get('test',function() {
    dd('test');
});

Route::get('users',[UserController::class,'index']);
Route::get('show/{id}',[UserController::class,'show']);
Route::post('users/store',[UserController::class,'store']);

Route::put('users/{id}',[UserController::class,'update']);
Route::delete('users/{id}',[UserController::class,'delete']);

// $routes->addRoute(Route::get('/index', [UserController::class, 'show']));
// $routes->addRoute(Route::post('/users', [UserController::class, 'show']));
// $routes->addRoute(Route::post('/users', [UserController::class, 'store']));

// return $routes;