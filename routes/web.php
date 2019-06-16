<?php

Route::get('/new', 'ProductController@new');
Route::post('/new','ProductController@create');

Route::get('/index','ProductController@index');
Route::get('/','ProductController@show');

Route::get('/random','ProductController@random');
