<nav class="navbar navbar-expand-lg navbar-light bg-dark mynavbar sticky-top">
  <div class="container-fluid">
      <a class="navbar-brand" href="#"><img class=" img-fluid logo" src="/images/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active text-warning" aria-current="page" href="{{route("welcome")}}">Home</a>
              </li>
            @guest
              <li class="nav-item">
                  <a class="nav-link active text-warning" href="{{route("login")}}">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active text-warning" href="{{route("register")}}">Registrati</a>
              </li>
            @else    
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu mt-3 " aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="">Profilo</a></li>
                <li>
    
                </li>
                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                  @csrf
                </form>
              </ul>
            </li>
           @endguest
          </ul>
      </div>
  </div>
</nav>
