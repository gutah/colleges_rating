<?php

namespace App\Http\Controllers;

use App\Course;
use App\College;

class CollegesController extends Controller
{

  protected $redirectTo = '/home';

  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){

    $response = College::paginate(6);
    return view('colleges.index', compact('response'));

  }

  public function show(College $college){

    $college = College::find($college->id);
    return view('colleges.show',compact('college'));

  }

  public function create(){

    $courses = Course::all();
    return view('colleges.create',compact('courses'));

  }

  public function store(){

    $this->validate(request(), [
      'name'=>'required',
      'description'=>'required',
      'type'=>'required'
    ]);

    $college = College::create([
      'name' => request('name'),
      'description' => request('description'),
      'type' => request('type'),
      'slug' => College::setSlug(request('name'))
    ]);

    return $college->courses()->attach(request('course_id'));

  }

  public function edit(College $college) {

    $courses = Course::all();
    $college = College::find($college->id);
    return view("colleges.edit",compact('college','courses'));
  }

  public function update($id)
  {
    $college = College::find($id);
    $college->name = request('name');
    $college->description = request('description');
    $college->type = request('type');
    $college->slug = College::setSlug($college->slug);
    $college->courses()->sync(request('course_id'));
    $college->save();

    return redirect('/universidades');
  }

  public function delete(College $college)
  {
    $college = College::find($college->id);
    return view('colleges.delete',compact('college'));
  }

  public function destroy($id){

    $college = College::find($id);
    $college->courses()->detach();
    $college->delete();
    return redirect('/universidades');

  }
}
