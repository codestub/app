<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pets', 'PetsController@index');
Route::get('/pets/create', 'PetsController@create');
Route::get('/pets/{pet}', 'PetsController@show');
Route::get('/pets/{pet}/edit', 'PetsController@edit');

Route::post('/pets', 'PetsController@store');
Route::patch('/pets/{pet}', 'PetsController@update');
Route::delete('/pets/{pet}', 'PetsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
