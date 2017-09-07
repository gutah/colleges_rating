@extends('layouts.master')


@section('content')

  <form class="form-group" action="/cursos" method="POST">
    {{ csrf_field()}}
    <div class="form-group">
      <label class="form-control-label" for="name">Nome</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
    </div>
    <div class="form-group">
      <label class="form-control-label" for="description">Descrição</label>

       <textarea class="form-control" name="description" id="description" placeholder="Descrição" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

@endsection
