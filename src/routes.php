<?php 
Route::get('/shop','novapex\Shop\Controllers\shopController@index');
Route::post('/shop','novapex\Shop\Controllers\shopController@store')->name("shop.store");
Route::put('/shop','novapex\Shop\Controllers\shopController@update')->name("shop.update");
Route::get('/create','novapex\Shop\Controllers\shopController@create')->name("shop.create");
Route::delete('/shop/{id}','novapex\Shop\Controllers\shopController@destroy')->name("shop.destroy");
Route::get('/shop/edit/{id}','novapex\Shop\Controllers\shopController@edit')->name("shop.edit");

