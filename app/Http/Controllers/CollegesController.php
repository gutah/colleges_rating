<?php

namespace App\Http\Controllers;

use App\Course;
use App\College;

class CollegesController extends Controller
{

  protected $redirectTo = '/universidades';

  public function __construct(){
    $this->middleware('auth');
    //Definindo o caminho dos redirects
    $this->url = null;
    session()->put('url','universidades/');
  }

  public function index(){

    //$colleges = DB::table('colleges')->paginate(5);
    $colleges = College::paginate(5);
    return view('colleges.index', compact('colleges'));

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

    College::create([
      'name' => request('name'),
      'description' => request('description'),
      'type' => request('type'),
      'slug' => College::setSlug(request('name'))

    ]);

    return redirect(session()->get('url'));

  }

  public function edit(College $college)
  {
      $college = College::find($college->id);

      //dd($college);
      return view("colleges.edit")->with('college', $college);
  }

  public function update($id)
  {

    $college = College::find($id);
    $college->name = request('name');
    $college->description = request('description');
    $college->type = request('type');
    $college->slug = College::setSlug($college->slug);
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

    $college->delete();
    return redirect(session()->get('url'));

  }
}
