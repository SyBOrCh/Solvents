<?php

Route::get('/', 'SolventController@index');

Route::get('solvent', 'SolventController@index');
Route::post('solvent', 'SolventController@store');
Route::get('solvent/create', 'SolventController@create');

Route::get('solvent/stock', 'SolventController@editStock');
Route::post('solvent/stock/update/', 'SolventController@updateStock');

Route::get('solvent/batch', 'SolventController@addBatch');
Route::post('solvent/batch/update', 'SolventController@batchUpdate');

Route::get('solvent/{solvent}', 'SolventController@edit');
Route::patch('solvent', 'SolventController@update');


Route::get('checkout/{solvent}', 'CheckoutController@store');
Route::patch('checkout/{solvent}', 'CheckoutController@update');
