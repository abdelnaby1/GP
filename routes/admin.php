<?php

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){

    // Config::set('auth.define','admins');
    Route::get('login','AdminAuth@login');
    Route::get('forgot/password','AdminAuth@forgot_password');
    Route::post('forgot/password','AdminAuth@forgot_password_post');
    Route::post('login','AdminAuth@doLogin');
    Route::group(['middleware' => 'admin:admin'], function () {
        Route::get('/',function(){
            return view('admin.home');
        });
        Route::any('logout','AdminAuth@logout');
    });
    

});


?>