<?php
//Routes of admin side pages
Route::group(['namespace'=>'Admin','middleware'=>'auth'],function (){
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});


?>