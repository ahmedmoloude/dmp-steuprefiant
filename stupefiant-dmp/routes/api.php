<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\FicheDemandeController;
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

//Route::post('/configs', [ConfigController::class , 'getConfigs']);
//Route::resource('/fiche_demandes', FicheDemandeController::class);

/* tables configs */
Route::get('/configs', [ConfigController::class , 'index']);
Route::get('/configs/{config}', [ConfigController::class , 'show']);

/* fiche de demandes */
Route::get('/fiche_demandes', [FicheDemandeController::class , 'index']);
Route::get('/fiche_demandes/{ficheDemande}', [FicheDemandeController::class ,'show']);

/* demandes */
Route::get('/client_demandes', [DemandeController::class , 'getDemandeByClientId']);
Route::get('/demandes/{id}', [DemandeController::class, 'show']);
Route::post('/demandes', [DemandeController::class , 'store']);
Route::post('/upload', [DemandeController::class , 'uploadImage']);



