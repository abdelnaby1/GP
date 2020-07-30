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
Route::middleware('auth:owner')->get('/owner', function (Request $request) {
    return auth()->user();
});

Route::post('register','User\AuthController@register');
Route::post('login','User\AuthController@login');

Route::group(['middleware'=>'auth:api','namespace'=>'User'],function(){

	
        // Route::get('test',function(){
        //     return 'hello';
        // });
		Route::get('request',function(){
			return request()->user();
		});  

});

//====================================================================================================================//

// Route::prefix('owner')->group(function () {
//     Route::middleware('auth.owner')->group(function () {
//         Route::post('register','Owner\AuthController@register');
//         Route::post('login','Owner\AuthController@login');
//     }); 
// });



Route::group(['prefix'=>'owner','middleware'=>'auth.owner','namespace'=>'Owner'],function(){

	Route::post('register','AuthController@register');
	Route::post('login','AuthController@login');
	Route::group(['middleware' => 'auth:owner'], function () {
        Route::post('request','RequestController@makeRequest');
		// Route::get('request',function(){
		// 	return 'add';
		// });
	});
    

});


// Route::get('/places','PlaceController@index');
// Route::get('/places/{id}','PlaceController@show');


// Route::post('login','UserController@login');
// Route::post('register','UserController@register');
// Route::group(['middleware' => 'auth:api'], function(){

// 	Route::get('details', 'UserController@details');
// 	Route::get('logout', 'UserController@logout');
	

// });