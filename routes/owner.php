<?php


// Route::middleware('auth.owner')->group(function () {
//     Route::post('register','Owner\AuthController@register');
// 	Route::post('login','Owner\AuthController@login');
// 	Route::group(['middleware' => 'api:owner'], function () {
		
// 	});
// }); 

// Route::group(['middleware'=>'auth.owner','namespace'=>'Owner'],function(){

// 	Route::post('register','AuthController@register');
// 	Route::post('login','AuthController@login');
// 	Route::group(['middleware' => 'auth:owner'], function () {
// 		Route::post('request',function(){
// 			return 'add';
// 		});
// 	});
    

// });

// Route::group(['prefix' => 'api/owner','middleware' => ['auth.owner','auth:api']], function() {
    
//     Route::get('/', function() {
//         return 'owners';
//  });
//     Route::get('details', 'UserController@details');
// 	Route::get('logout', 'UserController@logout');
// });


// Route::group(['middleware' => ['auth.admin','auth:api']], function() {
