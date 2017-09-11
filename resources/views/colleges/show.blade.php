@extends('layouts.master')

@section('content')

    <h1 class="starter-template">{{$college->name}}</h1>

    <div class="col col-12 text-justify">
      <p>{{$college->description}}</p>
    </div>
    <div class="col col-12 text-right">
      <hr>
        @include('colleges.collegesBtn')
    </div>


@endsection
