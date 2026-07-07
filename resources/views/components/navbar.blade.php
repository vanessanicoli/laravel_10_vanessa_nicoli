<nav class="navbar navbar-expand-lg bg-gr" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}"><i class="bi bi-chat-dots-fill fs-3 text-lgr"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link ms-3 ms-md-0" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link ms-3 ms-md-0" aria-current="page" href="{{ route('auth.profile') }}">Profilo</a>
        </li>
        @endauth
      </ul>
      <ul class="navbar-nav ms-auto">
        @guest
        <li class="nav-item">
          <a class="nav-link mx-md-2 ms-3 ms-md-0" href="{{ route('register') }}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-md-2 ms-3 ms-md-0" href="{{ route('login') }}">Accedi</a>
        </li>
        @endguest
        @auth
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="nav-link mx-md-2 ms-3 ms-md-0">Logout</button>
          </form>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>