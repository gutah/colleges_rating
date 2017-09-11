@extends('layouts.master')


@section('content')

  <form class="form-group" action="/universidades/{{$college->id}}" method="POST">
    {{ csrf_field()}}
    {{ method_field('patch') }}

    <div class="form-group">
      <label class="form-control-label" for="name">Nome</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Nome" value="{{$college->name}}" required>
    </div>
    <div class="form-group">
      <label class="form-control-label" for="description">Descrição</label>

       <textarea class="form-control" name="description" id="description" placeholder="Descrição" rows="4" required>{{$college->description}}
       </textarea>
    </div>

    <div class="form-group">
      <label class="form-control-label" for="name">Tipo</label>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="type" value="0"
          @if ($college->type == 0)
            {{ "checked" }}
          @endif>
          Pública
        </label>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="type" value="1"
          @if ($college->type == 1)
            {{ "checked" }}
          @endif>
          Privada
        </label>
      </div>

    </div>
    <button type="submit" class="btn btn-success">Alterar</button>
    <a class="btn btn-outline-primary" href="/universidades">Voltar</a>
  </form>

@endsection
