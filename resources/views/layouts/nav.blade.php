<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="/">Colleges <span class="text-info">Rank</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/universidades">Universidades<span class="sr-only"></span></a>
        {{--<li class="nav-item active">
          <a class="nav-link" href="#">Top 20<span class="sr-only"></span></a>
        </li>--}}
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/cursos">Cursos<span class="sr-only"></span></a>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li class="nav-item">
              <a class="nav-link btn btn-outline-primary btn-md" href="{{ route('login') }}">Entrar</a>
            </li>&nbsp
            <li class="nav-item">
              <a class="nav-link btn btn-success btn-md" href="{{ route('register') }}">Cadastre-se</a>
            </li>
        @else
          <div class="nav-item">


              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary btn-md dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                  {{--<a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>--}}
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                </div>
              </div>

              <ul class="dropdown-menu" role="menu">
                  <li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
              </div>
        @endif
    </ul>




    {{--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>--}}
  </div>
</nav>
