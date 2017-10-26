<div class="container">

  <div class="float-center">
    <div class="col col-12">
      <div class="form-group">
        <div class="input-group input-group-lg">
          <input id="campoFiltro" type="text" class="form-control" placeholder="Pesquise aqui...">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid card-deck">
    <div class="row center">
      @foreach ($response as $r)
        <div id="cards" class="">
          <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
            <div class="card-header">
              <h4 class="card-title info-nome">{{$r->name}}</h4>
            </div>
            <div class="card-body">
              <p class="card-text">{{substr($r->description, 0, 95)}}</p>
              <p class="card-text"><small class="text-muted">Ultima atualização {{ $r->updated_at->diffForHumans(null, true) }}</small></p>
              <div class="card-footer bg-dark border-dark text-right text-center">
                <a href="{{url()->current()}}\{{$r->slug}}" class="btn btn-outline-info btn-lg btn-block">Ver mais</a>
              </div>
            </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  </div>

  {{$response->links()}}

@if (request()->user()->authorizeRoles(['admin']))
  <hr>
  <div class="col col-12">
    <a href="{{url()->current()}}/create" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Adicionar</a>
  </div>
@endif

</div>


<style media="screen">
  .invisivel {
    display: none;
  }
</style>

<script type="text/javascript">
var campoFiltro = document.querySelector("#campoFiltro");
console.log(campoFiltro);

campoFiltro.addEventListener("input", function() {
var pacientes = document.querySelectorAll("#cards");
          console.log(pacientes.length);

  if (this.value.length > 0) {
      for (var i = 0; i < pacientes.length; i++) {

          var paciente = pacientes[i];
          var tdNome = paciente.querySelector(".card-title");
          var nome = tdNome.textContent;
          console.log(nome);
          var expressao = new RegExp(this.value, "i");

          // Adição aqui
          if (expressao.test(nome)) {
              paciente.classList.remove("invisivel");
          } else {
              paciente.classList.add("invisivel");
          }
      }
  } else {
      for (var i = 0; i < pacientes.length; i++) {
          var paciente = pacientes[i];
          paciente.classList.remove("invisivel");
      }
  }
});
</script>
