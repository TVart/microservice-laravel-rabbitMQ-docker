<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MovieController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource('v1/movies', MovieController::class);

/*Route::get('v1/movies', [MovieController::class, 'index']);
Route::get('v1/movies/{id}', [MovieController::class, 'show']);
Route::post('v1/movies}', [MovieController::class, 'store']);
Route::put('v1/movies/{id}', [MovieController::class, 'update']);
Route::delete('v1/movies/{id}', [MovieController::class, 'destroy']);*/


