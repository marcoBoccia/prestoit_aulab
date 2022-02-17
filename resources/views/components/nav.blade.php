{{-- <header role="banner">
  <img id="logo-main" src="{{URL::asset('/images/logo1.png')}}" width="50" alt="Logo Thing main logo"> --}}
<nav class="navbar navbar-expand-lg mynavbar navbar-dark prova">
  <div class="container-fluid">
  <a class="navbar-brand nav-color" href="{{route("welcome")}}">
  <img src="{{URL::asset('/images/logopresto.png')}}" alt="" style="width: 90px">
  </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active nav-color" aria-current="page" href="{{route("welcome")}}">{{__('ui.home')}}</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-color text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{__('ui.category')}} 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($categories as $category)
                  <li>
                    <a class="dropdown-item" href="{{route('category_index', ['id' => $category->id])}}">
                   {{$category->name}}
                  </a>
                  </li>
                  @endforeach
                </ul>
              </li>
              
              @guest
              <li class="nav-item">
                <a class="nav-link active nav-color" href="{{route("login")}}">{{__('ui.login')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active nav-color" href="{{route("register")}}">{{__('ui.register')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active nav-color" href="{{route("announcement_index")}}">{{__('ui.ads')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active nav-color" href="{{route("announcement_form")}}">{{__('ui.sell')}}</a>
              </li>
             
      
              
              <li class="nav-item">
                @include('components._locale', ['lang' => 'it', 'nation' => 'it'])
                
                </li>
  
                <li class="nav-item">
                @include('components._locale', ['lang' => 'gb', 'nation' => 'gb'])
                  
                </li>
  
                <li class="nav-item">
                @include('components._locale', ['lang' => 'de', 'nation' => 'de'])
                  
                </li>
              
              @else    
              
              
              @if (Auth::user()->is_revisor)
              
              <li class="nav-item">
                <a class="nav-link active nav-color" href="{{route("revisor_index")}}">Revisor Home
                  <span class="badge badge-pill bg-dark text-white">{{\App\Models\AnnouncementModel::ToBeRevisionedCount()}}
                    </span>
                  </a>
                </li>
                
                @endif
                
                
                <li class="nav-item">
                  <a class="nav-link active nav-color" href="{{route("announcement_index")}}">{{__('ui.ads')}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active nav-color" href="{{route("announcement_form")}}">{{__('ui.sell')}}</a>
                </li>
                <li class="nav-item">
                  @include('components._locale', ['lang' => 'it', 'nation' => 'it'])
                  
                  </li>
    
                  <li class="nav-item">
                  @include('components._locale', ['lang' => 'gb', 'nation' => 'gb'])
                    
                  </li>
    
                  <li class="nav-item">
                  @include('components._locale', ['lang' => 'de', 'nation' => 'de'])
                    
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle nav-color" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}} <i class="fa-solid fa-user"></i>
                  </a>
                  <ul class="dropdown-menu mt-3 " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="">Profilo</a></li>
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
