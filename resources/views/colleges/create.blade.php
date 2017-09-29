@extends('layouts.master')


@section('content')

  <form class="form-group" action="/universidades" method="POST">
    {{ csrf_field()}}
    <div class="form-group">
      <label class="form-control-label" for="name">Nome</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
    </div>
    <div class="form-group">
      <label class="form-control-label" for="description">Descrição</label>

       <textarea class="form-control" name="description" id="description" placeholder="Descrição" rows="4" required></textarea>
    </div>

    <div class="form-group">
      <label class="form-control-label" for="name">Tipo</label>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="type" value="0" checked>
          Pública
        </label>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="type" value="1">
          Privada
        </label>
      </div>

      {{--Listagem de cursos--}}
      {{--
      <div class="form-group">
        <label class="form-control-label" for="college_id">Cursos</label>
        <select class="" name="college_id">
          @foreach ($courses as $course)
            <option value="{{$course->id}}">{{$course->name}}</option>
           @endforeach
        </select>
      </div>{{--End Listagem de curso--}}

    </div>
    <hr>

    <a class="btn btn-outline-primary" href="/universidades">Voltar</a>
    <button type="submit" class="btn btn-primary">Cadastrar</button>

  </form>
@endsection
