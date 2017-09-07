<?php

Route::get('/', function () {
  return view('welcome');

});

//Modulo de Cursos
Route::get('/cursos', 'CoursesController@index');
Route::post('/cursos', 'CoursesController@store');
Route::get('/cursos/create', 'CoursesController@create');
Route::get('/cursos/{courses}', 'CoursesController@show');

//Modulo de Cursos
Route::get('/universidades', function() {return "Página de Lista de Faculdades";});
Route::get('/universidades/{colleges}', function() {return "Página de Faculdade";});

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
