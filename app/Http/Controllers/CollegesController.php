<?php

namespace App\Http\Controllers;

use App\College;

class CollegesController extends Controller
{

  public function __construct(){
    //Definindo o caminho dos redirects
    $this->url = null;
    session()->put('url','universidades/');
  }

  public function index(){

    $colleges = College::all();
    return view('colleges.index', compact('colleges'));

  }

  public function show(College $college){

    $college = College::find($college->id);
    return view('colleges.show',compact('college'));

  }

  public function create(){
    return view('colleges.create');
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
    $college->slug = College::setSlug($college->slug);
    $college->save();

    return redirect($url);

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
