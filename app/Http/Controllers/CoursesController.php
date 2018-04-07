<?php

namespace App\Http\Controllers;
use App\Course;

class CoursesController extends Controller
{
  public function __construct(){

    $this->middleware('auth');

  }

  public function index(){

    $response = Course::paginate(6);
    return view('courses.index', compact('response'));

  }

  public function show(Course $course){

    $course = Course::find($course->id);
    return view('courses.show',compact('course'));

  }

  public function create(){
    request()->user()->isAdmin();
    return view('courses.create');
  }

  public function store(){
    request()->user()->isAdmin();
    $this->validate(request(), [
      'name'=>'required',
      'description'=>'required'
    ]);

    Course::create([
      'name' => request('name'),
      'description' => request('description'),
      'slug' => Course::setSlug(request('name'))

    ]);

    return redirect('cursos/',201);

  }

  public function edit(Course $course)
  {
    request()->user()->isAdmin();
    $course = Course::find($course->id);
    return view("courses.edit")->with('course', $course);
  }

  public function update($id)
  {
    request()->user()->isAdmin();
    $course = Course::find($id);
    $course->name = request('name');
    $course->description = request('description');
    $course->slug = Course::setSlug($course->slug);
    $course->save();

    return redirect('/cursos');

  }

  public function delete(Course $course)
  {
    request()->user()->isAdmin();
    $course = Course::find($course->id);
    return view('courses.delete',compact('course'));
  }

  public function destroy($id){
    request()->user()->isAdmin();
    $course = Course::find($id);
    $course->colleges()->detach();
    $course->delete();
    return redirect('/cursos');
  }

}
