<?php 

Route::get('/shop','Novapex\Shop\Controllers\shopController@index');
Route::post('/shop','Novapex\Shop\Controllers\shopController@store')->name("shop.store");
