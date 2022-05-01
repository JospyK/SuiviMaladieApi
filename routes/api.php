<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login', [AuthController::class, 'login']);
Route::delete('logout', [AuthController::class, 'logout']);

Route::get('test', function (){ return 'ok'; });

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Users
    Route::apiResource('users', 'UsersApiController');

    // Symptome
    Route::apiResource('symptomes', 'SymptomeApiController');

    // Traitement
    Route::apiResource('traitements', 'TraitementApiController');

    // Liste Examen
    Route::apiResource('liste-examen', 'ListeExamenApiController');

    // Consultation
    Route::apiResource('consultations', 'ConsultationApiController');

    // Ordonnances
    Route::apiResource('ordonnances', 'OrdonnancesApiController');

    // Examen
    Route::apiResource('examen', 'ExamenApiController');

    // Intervention
    Route::apiResource('interventions', 'InterventionApiController');

    // Hospitalisation
    Route::apiResource('hospitalisations', 'HospitalisationApiController');

    // Liste Maladie
    Route::apiResource('liste-maladies', 'ListeMaladieApiController');

    // Les maladies d'un patient
    Route::get('users/{user}/maladies', 'UsersApiController@maladies');
});
