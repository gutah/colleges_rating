@extends('layouts.master')

@section('content')

  <div class="jumbotron">
    <div class="container text-center ">
      <h1 class="display-3">Sorry!</h1><h2>Você não possui permissão para realizar essa ação</h2>
      <p class="lead txt-danger">Por favor entre em contato caso ache que algo deveria existir aqui.</p>
      <hr class="my-4">
      <a class="btn btn-outline-primary btn-lg" href="/" role="button">Me leve para casa</a>
      <a class="btn btn-outline-dark btn-lg" href="#" role="button">Entre em contato</a>

    </div>
  </div>

@endsection
