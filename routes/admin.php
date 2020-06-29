<?php
//Routes of admin side pages
Route::group(['namespace'=>'Admin'],function (){
    Route::group(['middleware'=>'auth:admin'],function () {
        Route::get('/dashboard', 'AdminCrudController@dashbard')->name('admin.dashboard');
    });
    Route::group(['middleware'=>'guest:admin'],function (){
        Route::get('/login','AdminCrudController@getLogin')->name('get.admin.login');
        Route::post('/login','AdminCrudController@AdminCheckLogin')->name('admin.login');
    });

});


?>