<?php

/* Some Cool Testing Routes */

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Thegr8dev\Contactus\Http\Controllers'], function () {
    Route::get('/contactus', 'ContactusController@getView');

    Route::post('/contactus', 'ContactusController@post')->name('send.message');
});
