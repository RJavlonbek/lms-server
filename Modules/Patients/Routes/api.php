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

// Route::middleware('auth:api')->get('/patients', function (Request $request) {
//     return $request->user();
//     return 'Patients API';
// });

Route::group(['middleware' => ['auth:api']], function(){
	Route::prefix('patients')->group(function(){
		Route::get('/list', 'PatientsController@index');
	});
});