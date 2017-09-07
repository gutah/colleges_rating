<?php

namespace App\Http\Controllers;

use App\Course;

class CoursesController extends Controller
{

  public function index(){

    $courses = Course::all();
    return view('courses.index', compact('courses'));


  }

  public function show($id){

    $courses = Course::find($id);
    return view('courses.show')->with('courses', $courses);

  }

  public function create(){
    return view('courses.create');
  }

  public function store(){

    Course::create([
      'name' => request('name'),
      'description' => request('description')

    ]);

    return redirect('cursos/');


  }



}
