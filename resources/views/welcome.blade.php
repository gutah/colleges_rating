@extends('layouts.master')

@section('content')

<div class="starter-template">
  <h1 class="">Bem-vindo ao Colleges Rank</h1>
  <h2>seu espaço para buscar as melhores universidades</h2>

</div>

<div class="row md-3">
  <div class="col col-lg-4">
    <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Universisdades</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/universidades" class="btn btn-outline-info btn-lg">Universidades</a>
      </div>
    </div>
  </div>

  <div class="col col-lg-4">
    <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Cursos</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/cursos" class="btn btn-outline-info btn-lg">Cursos</a>
      </div>
    </div>
  </div>
  {{--<div class="col col-lg-4">
    <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Top 20</h4>
        <p class="card-text">Veja o Top 20 universidades no Brasil</p>
        <a href="/cursos" class="btn btn-outline-info btn-lg">Top 20</a>
      </div>
    </div>
  </div>--}}



</div>

@endsection
