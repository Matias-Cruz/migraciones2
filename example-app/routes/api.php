<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
use App\Core\Route;
use App\Core\RouteCollection;
use App\http\Controllers\UserController;
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
$routes = new RouteCollection();

$routes->addRoute(Route::post('/users', [UserController::class, 'store']));
$routes->addRoute(Route::post('/users', [UserController::class, 'show']));

return $routes;