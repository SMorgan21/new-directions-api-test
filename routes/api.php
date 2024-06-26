<?php

use App\Http\Controllers\AuthController;
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

Route::post('/get-token', [AuthController::class, 'getToken']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/applicants', 'ApplicantController@index');
    Route::get('/applicants/{applicant}', 'ApplicantController@show');
    Route::get('/applicants/{applicant}/cv', 'ApplicantController@downloadCv');

});
