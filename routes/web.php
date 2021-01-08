<?php

Auth::routes();


Route::get('/', 'HomeController@index');

Route::get('/jabatan', 'PositionController@index')->name('positions.index');
Route::get('/create-new-position', 'PositionController@create')->name('positions.create');
Route::post('/create-new-position', 'PositionController@store');

Route::get('/edit-the-position/{position}', 'PositionController@edit')->name('positions.edit');
Route::post('/edit-the-position/{position}', 'PositionController@update');

Route::post('/destroy-the-position/{position}', 'PositionController@destroy')->name('positions.delete');




Route::get('/karyawan', 'WorkerController@index')->name('workers.index');
Route::get('/create-new-karyawan', 'WorkerController@create')->name('workers.create');
Route::post('/create-new-karyawan', 'WorkerController@store');
