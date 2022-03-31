<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\fichieDedemandeController;
use App\Http\Controllers\DemandeController;



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

// Route::resource('/configs', ConfigController::class);
Route::resource('/fichie_demande', fichieDedemandeController::class);
Route::resource('/demande', DemandeController::class);

Route::post('/configs', [ConfigController::class , 'getConfigs']);


