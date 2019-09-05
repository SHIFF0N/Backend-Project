<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('/RegisterModel', RegisterController::class);
Route::resource('/EvaluationModel', EvaluationController::class);
Route::resource('/ProfilerModel', ProfileController::class);
Route::resource('/PaymentrModel', PaymentController::class);
Route::resource('/CourseModel', CourseController::class);
