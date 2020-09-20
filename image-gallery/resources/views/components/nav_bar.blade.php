<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="navbar-nav mr-auto">
    <a class="nav-link" href="{{ url('view-uploads') }}">Voir les images</a>
    <a class="nav-link" href="{{ url('file-upload') }}">Uploader une image</a>
  </div>
  <div class="form-inline my-2 my-lg-0">
    @auth
    <a class="nav-link text-success btn btn-outline-success" href="{{ route('logout') }}"
        onclick="event.preventDefault();                                                 document.getElementById('logout-form').submit();">
        Se déconnecter
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
        {{ csrf_field() }}
    </form>
    @else
    <a class="nav-link" href="{{ url('login') }}">Se connecter</a>
    <a class="nav-link" href="{{ url('register') }}">S'enregistrer</a>
    @endif
  </div>
</nav>