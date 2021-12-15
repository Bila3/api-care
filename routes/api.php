<?php

use App\Http\Controllers\DataCareController;
use App\Http\Controllers\GetIdController;
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

Route::get('care',[DataCareController::class, 'index']);
Route::get('Idcare',[GetIdController::class, 'showId']);
Route::post('care',[DataCareController::class, 'create']);
Route::put('care',[DataCareController::class, 'update']);
Route::delete('care',[DataCareController::class, 'delete']);