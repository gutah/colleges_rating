<?php

Route::get('/', function () {return view('welcome');});

Route::get('/cursos', 'CoursesController@index');
Route::get('/cursos/{courses}', 'CoursesController@show');
