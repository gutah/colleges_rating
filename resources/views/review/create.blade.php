@extends('layouts.master')


@section('content')

  <form class="form-horizontal">
  <fieldset>

  <!-- Form Name -->
  <center>
    <legend>Avaliação</legend>
    <p class="txt-center">Por favor avalie os requisitos abaixo de sua universidade de 1-5</p>
  </center>
  <!-- Multiple Radios (inline) -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Questão 1</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="">Selecione uma nota</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Questão 2</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="">Selecione uma nota</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Questão 3</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="">Selecione uma nota</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Questão 4</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="">Selecione uma nota</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Questão 5</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control" placeholder="Selecione uma nota">
      <option value="">Selecione uma nota</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Questão 6</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="">Selecione uma nota</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Questão 7</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="">Selecione uma nota</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4">
      <button id="singlebutton" name="singlebutton" class="btn btn-primary">Avaliar</button>
    </div>
  </div>

  </fieldset>
  </form>
@endsection
