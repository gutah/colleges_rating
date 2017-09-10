<?php

namespace App\Http\Controllers;

use App\Course;

class CoursesController extends Controller
{

  public function index(){

    $courses = Course::all();
    return view('courses.index', compact('courses'));


  }

  public function show(Course $course){

    $course = Course::find($course->id);

    return view('courses.show',compact('course'));

  }

  public function create(){
    return view('courses.create');
  }

  public function store(){

    $this->validate(request(), [
      'name'=>'required',
      'description'=>'required'
    ]);

    Course::create([
      'name' => request('name'),
      'description' => request('description'),
      'slug' => Course::setSlug(request('name'))

    ]);

    return redirect('cursos/');

  }

  public function edit($id)
  {
      $course = Course::find($id);

      //dd($course);
      return view("courses.edit")->with('course', $course);
  }

  public function update($id)
  {

    $course = Course::find($id);
    $course->name = request('name');
    $course->description = request('description');
    $course->slug = Course::setSlug($course->slug);
    $course->save();

    return redirect('/cursos');

  }

  public function delete($id)
  {
    $courses = Course::find($id);
    return view('courses.delete',compact('courses'));
  }

  public function destroy($id){

    $course = Course::find($id);

    $course->delete();
    return redirect('/cursos');

  }

}
