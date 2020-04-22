<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::post('/login', 'LoginController@authenticate');

Route::group(['middleware'=>['auth:api']], function(){
	Route::prefix('users')->group(function(){
		Route::get('/list', 'UsersController@index');
		Route::get('/doctors/list', 'UsersController@getDoctors');
		Route::get('/active', 'UsersController@getActiveUser');
	});
});