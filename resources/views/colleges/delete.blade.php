@extends('layouts.master')

@section('content')

    <h1 class="starter-template">Tem certeza que deseja excluir o curso <span>{{$college->name}}</span></h1>

    <div class="col col-12 text-center">
      <form class="" action="/universidades/{{$college->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-outline-danger btn-lg">Excluir</button>
        <a href="/universidades" class="btn btn-outline-primary btn-lg">Voltar</a>
      </form>

    </div>

@endsection
