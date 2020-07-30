<?php

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
    return view('welcome');
});

// Route::get('/test', function () {
//     return 'ho';
// });
// Auth::routes();

// Route::middleware('auth:admin')->group(function () {
//     // Route::post('register','Owner\AuthController@register');
//     // Route::post('login','Owner\AuthController@login');
//     Route::get('/test', function () {
//         return auth()->user();
//     });

// }); 

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home2', 'Admin\DashboardController@index')->name('home2');
