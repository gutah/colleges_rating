@extends('layouts.master')

@section('content')

    <h1 class="starter-template">{{$courses->name}}</h1>

    <div class="col col-12 text-justify">
      <p>{{$courses->description}}</p>
    </div>

@endsection
