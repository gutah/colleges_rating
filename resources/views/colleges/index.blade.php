@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="starter-template">
      <h1>Universidades</h1>
  </div>

  @include('layouts.cards')

  <hr>
  <div class="col col-12">
    <a href="/universidades/create" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Adicionar</a>
  </div>

@endsection
