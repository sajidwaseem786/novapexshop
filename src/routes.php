<?php 

Route::get('/shop','novapex\Shop\Controllers\shopController@index');
Route::post('/shop','novapex\Shop\Controllers\shopController@store')->name("shop.store");
