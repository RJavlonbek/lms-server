<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	// Test database connection
	try {
	    DB::connection()->getPdo();
	} catch (\Exception $e) {
	    die(env('DB_HOST').env('DB_CONNECTION')."Could not connect to the database.  Please check your configuration. error:");
	}
	//Auth::logout();
    return view('welcome');
});


