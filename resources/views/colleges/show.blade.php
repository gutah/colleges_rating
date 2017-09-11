@extends('layouts.master')

@section('content')

    <h1 class="starter-template">{{$college->name}}</h1>

    <div class="row">
      <div class="jumbotron col col-8 text-justify">
        <h2>Sobre</h2>
        <hr>
        <p>{{$college->description}}</p>
      </div>
      <div class="col col-4">
        <h4>Tipo</h4>
        @if ($college->type == 0)
          <p>Pública</p>
        @endif
        @if ($college->type <> 0)
          <p>Privada</p>
        @endif
      </div>
    </div>

    <div class="col col-12 text-right">
      <hr class="my-4">
        @include('colleges.collegesBtn')
    </div>


@endsection
