@extends('layouts.master')

@section('content')

  <div class="starter-template">

    <h1>Cursos</h1>

  </div>


  <div class="card-deck">
    <div class="row">
      @foreach ($courses as $course)
        <div class="col-lg-4">
        <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
          <div class="card-header"><h4 class="card-title"><a href="/cursos/{{$course->id}}">{{$course->name}}</a></h4></div>
          <div class="card-body">
            {{--<h4 class="card-title"><a href="/cursos/{{$course->id}}">{{$course->name}}</a></h4>--}}
            <p class="card-text">{{substr($course->description, 0, 95)}}</p>
            <div class="card-footer bg-dark border-dark text-right">
              <a class="btn btn-outline-info" href="#">Alterar</a>
              <a class="btn btn-outline-danger" href="#">Excluir</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <hr>
  <div class="col col-10">

    <a href="/cursos/create" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Adicionar</a>

  </div>

@endsection
