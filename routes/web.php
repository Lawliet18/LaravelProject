<?php

Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/customer/book/{id}', 'ContactController@customer');
Route::get('/all/book/{id}', 'ContactController@allBooks');
Route::get('/genre/{id}', 'ContactController@allGenre');
Route::get('/welcome','UserController@index');

