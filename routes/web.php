<?php

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
  return view('welcome');

})->name('home');

//Modulo de Cursos
Route::get('/cursos', 'CoursesController@index')->name('cursos');
Route::post('/cursos', 'CoursesController@store');
Route::get('/cursos/create', 'CoursesController@create');
Route::get('/cursos/{course}', 'CoursesController@show');
Route::get('/cursos/{course}/delete', 'CoursesController@delete');
Route::patch('/cursos/{courses}', 'CoursesController@update');
Route::delete('/cursos/{courses}', 'CoursesController@destroy');
Route::get('/cursos/{course}/edit', 'CoursesController@edit');

//Modulo de Universidades
Route::get('/universidades', 'CollegesController@index')->name('universidades');
Route::post('/universidades', 'CollegesController@store');
Route::get('/universidades/create', 'CollegesController@create');
Route::get('/universidades/{college}', 'CollegesController@show');
Route::get('/universidades/{college}/delete', 'CollegesController@delete');
Route::patch('/universidades/{colleges}', 'CollegesController@update');
Route::delete('/universidades/{colleges}', 'CollegesController@destroy');
Route::get('/universidades/{college}/edit', 'CollegesController@edit');

//Modulo de usários
Route::get('/users', function() {return "Página de Usuários";});


/*
GET /posts
GET /posts/create
POST /posts
GET /posts/{id}/edit
GET /posts/{id}/
PATCH /posts/{id}
DELETE /posts/{id}
*/
