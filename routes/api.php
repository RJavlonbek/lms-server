<?php

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

// Route::middleware('auth')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/translations/add/{lang}', function(Request $request, $lang){
	$file = '../public/translations/'. $lang .'/translations.json';
	$jsonString = file_get_contents($file);
	//$jsonString = iconv('CP1251', 'UTF-8', $jsonString);
	$data = json_decode($jsonString, true);

	$key='';
	$updated = false;
	foreach($request->all() as $k => $val){
		if($k !== '_t'){
			$key = $val;
		}
	}

	if(!isset($data[$key])){
		$data[$key] = $key;
		$updated = true;
	}

	if($updated){
		$newJsonString = json_encode($data);
		file_put_contents($file, $newJsonString);
	}

	return response()->json([
		'key'=>$key
	]);
});
