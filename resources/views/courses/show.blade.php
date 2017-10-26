@extends('layouts.master')

@section('content')

    <h1 class="starter-template">{{$course->name}}</h1>

    <div class="col col-12 text-justify">
      <p>{{$course->description}}</p>
    </div>
    <div class="col col-12 text-right">
      <hr>
        @include('layouts.showFooterBtn',['response' => $course])
    </div>


@endsection
