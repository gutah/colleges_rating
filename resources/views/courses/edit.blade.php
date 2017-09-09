@extends('layouts.master')


@section('content')

  <form class="form-group" action="/cursos/{{$course->id}}" method="POST">
    {{ csrf_field()}}
    {{ method_field('patch') }}

    <div class="form-group">
      <label class="form-control-label" for="name">Nome</label>
      <input type="text" value="{{$course->name}}" name="name" class="form-control" id="name" placeholder="Nome" required>
    </div>
    <div class="form-group">
      <label class="form-control-label" for="description">Descrição</label>

       <textarea class="form-control" name="description" id="description" placeholder="Descrição" rows="4" required>{{$course->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Alterar</button>
    <a class="btn btn-outline-primary" href="/cursos">Voltar</a>
  </form>

@endsection
