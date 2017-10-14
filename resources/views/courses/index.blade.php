@extends('layouts.master')

@section('content')
  <div class="containar">
    <div class="starter-template">
      <h1>Cursos</h1>
    </div>

    @include('layouts.cards')

    <hr>
    <div class="col col-12">
      <a href="/cursos/create" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Adicionar</a>
    </div>

  </div>
@endsection
