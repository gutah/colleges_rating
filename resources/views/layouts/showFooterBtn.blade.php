
<a class="btn btn-outline-primary float-left" href="{{url()->previous()}}">Voltar</a>

@if (request()->user()->authorizeRoles(['admin']))
  <a class="btn btn-outline-primary" href="{{url()->current()}}/#">Avaliar</a>
  <a class="btn btn-outline-info" href="{{url()->current()}}/edit">Alterar</a>
  <a class="btn btn-outline-danger" href="{{url()->current()}}/delete"><svg-icon><src href="sprite.svg#si-glyph-trash" /></svg-icon>Excluir</a>
@else
  <a class="btn btn-outline-primary" href="{{url()->current()}}/#">Avaliar</a>
@endif
