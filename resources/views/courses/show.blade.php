@extends('layouts.master')

@section('content')

    <h1 class="starter-template">{{$course->name}}</h1>

    <div class="col col-12 text-justify">
      <p>{{$course->description}}</p>
    </div>
    <div class="col col-12 text-right">
      <hr>
      <a class="btn btn-outline-primary float-left" href="/cursos">Voltar</a>
        @include('courses.coursesBtn')
    </div>


@endsection
