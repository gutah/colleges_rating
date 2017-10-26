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
        <h3>Tipo</h3>
        @if ($college->type == 0)
          <p>Pública</p>
        @endif
        @if ($college->type <> 0)
          <p>Privada</p>
        @endif
      </div>
    </div>

    @if (count($college->courses)>0)
    <h3>Cursos disponíveis nessa universidade</h3>
    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          @foreach ($college->courses as $courses)
            <a class="list-group-item list-group-item-action " id="{{$courses->slug}}" data-toggle="list" href="#{{$courses->id}}" role="tab" aria-controls="{{$courses->slug}}">{{$courses->name}}</a>
          @endforeach
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          @foreach ($college->courses as $courses)
            <div class="tab-pane fade" id="{{$courses->id}}" role="tabpanel" aria-labelledby="{{$courses->slug}}">{{$courses->description}}</div>
          @endforeach
        </div>
      </div>
    </div>
    @else
    <h3>Não há cursos cadastrados para essa universidade.</h3>
    @endif


    <div class="col col-12 text-right">
      <hr class="my-4">
        @includeIf('layouts.showFooterBtn',['response' => $college])
    </div>

@endsection
