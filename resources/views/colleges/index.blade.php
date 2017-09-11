@extends('layouts.master')

@section('content')

  <div class="starter-template">
    <h1>Universidades</h1>
  </div>
  <div class="card-deck">
    <div class="row">
      @foreach ($colleges as $college)
        <div class="col-lg-4">
        <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">

          <div class="card-header">
            <h4 class="card-title">{{$college->name}}</h4>
          </div>

          <div class="card-body">
            {{--<h4 class="card-title"><a href="/cursos/{{$college->id}}">{{$college->name}}</a></h4>--}}
            <p class="card-text">{{substr($college->description, 0, 95)}}</p>
            <p class="card-text"><small class="text-muted">Ultima atualização {{ $college->updated_at->diffForHumans(null, true) }}</small></p>
            <div class="card-footer bg-dark border-dark text-right text-center">
              {{--@include('courses.coursesBtn')--}}

              <a href="/universidades/{{$college->slug}}" class="btn btn-outline-info btn-lg btn-block">Ver mais</a>
            </div>

          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <hr>
  <div class="col col-12">

    <a href="/universidades/create" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Adicionar</a>

  </div>

@endsection
