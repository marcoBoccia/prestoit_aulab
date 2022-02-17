<x-layout>

    <div class="container-fluid masthead back mt-5">

        @if (session("access.denied.revisor.only"))
            <div class="alert alert-danger">
                {{session("access.denied.revisor.only")}}
            </div>
         @endif
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6">
                    <h1 class="display-2 fw-bold">{{__('ui.welcome')}}</h1>
                    <a class="btn button-24" type="submit" href="{{route("announcement_form")}}">Inserisci annuncio</a>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2">
                    <img class="img-fluid" src="{{URL::asset('/images/onlineshop.png')}}" alt="">
                  </div>
            </div>
        </div>
    </div>
             
            


        
        <!-- {{-- <div class="d-flex drop-shadow">
            <div class="col-6">
                <h1 class="display-2 fw-bold text-center">{{__('ui.welcome')}}</h1>
                <div class="col-md-6 offset-md-5 mb-4">
                    <button class="btn button-24">Inserisci annuncio</button>
                </div>
            </div>
        </div> --}} -->

        

        <!-- sezione CATEGORIE -->
        <!-- <div class="container-fluid mt-5 py-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="display-3 fw-bold tc-main-dark">Categorie</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col ">
                    <div class="category-card">
                        <img class="img-fluid" src="https://via.placeholder.com/300x150.png">
                        <div class="category-details">
                            <h3 class="my-4">Cars <i class="fa-solid fa-car"></i></h3>
                            <a class="btn btn-main-gradient-onblack px-4 rounded-pill" href="">Vai alla categoria</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img class="img-fluid" src="https://via.placeholder.com/300x150.png">
                        <div class="category-details">
                            <h3 class="my-4">Houses <i class="fa-solid fa-house-chimney"></i></i></h3>
                            <a class="btn btn-main-gradient-onblack px-4 rounded-pill" href="">Vai alla categoria</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img class="img-fluid" src="https://via.placeholder.com/300x150.png" alt="">
                        <div class="category-details">
                            <h3 class="my-4">Console <i class="fa-brands fa-playstation"></i></h3>
                            <a class="btn btn-main-gradient-onblack px-4 rounded-pill" href="">Vai alla categoria</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img class="img-fluid" src="https://via.placeholder.com/300x150.png">
                        <div class="category-details">
                            <h3 class="my-4">Smartphones <i class="fa-solid fa-mobile-screen-button"></i></h3>
                            <a class="btn btn-main-gradient-onblack px-4 rounded-pill" href="">Vai alla categoria</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img class="img-fluid" src="https://via.placeholder.com/300x150.png">
                        <div class="category-details">
                            <h3 class="my-4">Tv <i class="fa-solid fa-tv"></i></h3>
                            <a class="btn btn-main-gradient-onblack px-4 rounded-pill" href="">Vai alla categoria</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 CATEGORIE SECONDO CONTAINER
        <div class="container-fluid">
            <div class="row">
                    <div class="col">
                        <div class="category-card">
                            <img class="img-fluid" src="https://via.placeholder.com/300x150.png">
                            <div class="category-details">
                                <h3 class="my-4">Computers <i class="fa-solid fa-laptop"></i></h3>
                                <a class="btn btn-main-gradient-onblack px-4 rounded-pill" href="">Vai alla categoria</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-card">
                            <img class="img-fluid" src="https://via.placeholder.com/300x150.png">
                            <div class="category-details">
                                <h3 class="my-4">Travels <i class="fa-solid fa-plane-departure"></i></h3>
                                <a class="btn btn-main-gradient-onblack px-4 rounded-pill" href="">Vai alla categoria</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-card">
                            <img class="img-fluid" src="https://via.placeholder.com/300x150.png">
                            <div class="category-details">
                                <h3 class="my-4">Moto <i class="fa-solid fa-motorcycle"></i></h3>
                                <a class="btn btn-main-gradient-onblack px-4 rounded-pill" href="">Vai alla categoria</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-card">
                            <img class="img-fluid" src="https://via.placeholder.com/300x150.png">
                            <div class="category-details">
                                <h3 class="my-4">Moto <i class="fa-solid fa-motorcycle"></i></h3>
                                <a class="btn btn-main-gradient-onblack px-4 rounded-pill" href="">Vai alla categoria</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-card">
                            <img class="img-fluid" src="https://via.placeholder.com/300x150.png">
                            <div class="category-details">
                                <h3 class="my-4">Moto <i class="fa-solid fa-motorcycle"></i></h3>
                                <a class="btn btn-main-gradient-onblack px-4 rounded-pill" href="">Vai alla categoria</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

          <!-- <div class="container border border-danger d-flex flex-column align-items-center">
            <form  method="GET" action="{{route('search')}}">
                <label for="">cerca annuncio</label>
                <input type="text" name="q">
                <button type="submit"  class= "btn btn-primary">cerca</button>
            </form>
        </div>  -->


        <!-- form per ricerca annuncio -->
        <div class="container-fluid d-flex flex-column align-items-center cover mynavbar mt-5">
            <form method="GET" action="{{route('search')}}">
                <label for="from">
                 
                </label>
                <div class="search1 rounded-pill">
                <input class="flex-forms search rounded-pill" type="text" name="q" placeholder="Motori, Immobili ,Elettronica">
                
                <button type="submit" class="btn color-blue rounded-pill"> 
                    <i class="fa-solid fa-magnifying-glass fs-3 text-white"></i>
                </button>
            </div>
            </form>
        </div>



        <!-- ULTIMI 5 ANNUNCI -->
        <div class="container mt-5 py-5">
            <div class="row justify-content-center">
                <div class="col">
                    <h2 class=" display-5 fw-bold text-center">Ultimi annunci</h2>
                </div>
            </div>
        </div>
        
        
        
        <div class="container mb-2">
            <div class="row justify-content-evenly">
                @foreach ($announcements as $announcement)
                <div class="col-12 col-md-6 my-3 d-flex">
                            <div class="cardcontainer" style="width:14rem;">
                                <div class="card-content">
                                
                                    <h4 class="card-title"> -{{ $announcement->title }}</h4> 
                                    <h4 class="card-title"> -{{ $announcement->price }}$</h4>

                                    @if($announcement->image != "[]")
                    
                                        @foreach($announcement->images as $image)
                                            
                                            <img src="{{ $image->getUrl(300,150) }}" alt="immagine prodotto">

                                        @endforeach
                                        
                                    @else
                                        
                                        <img class="img-fluid" src="https://via.placeholder.com/300x150.png">

                                    @endif
                                
                                <div class="text-dark">
                                    <ul>
                                        <li><strong>Categoria:  <a class="text-primary text-decoration-none" href="{{route('category_index', ['id'=>$announcement->category->id])}}">{{ $announcement->category->name }}</a></strong></li>
                                        <li>{{ $announcement->description }}</li>
                                        <li>{{ $announcement->price }}$</li>
                                        <li>{{ $announcement->created_at->format('d/m/Y') }}</li>
                                        <li>inserito da: {{ $announcement->user->name}}</li>
                                    </ul>
                                </div>
                                <button class="btn button-24bis"><a class="text-white" style="text-decoration: none" href="{{route('announcement_detail', ['a'=>$announcement])}}">Vai al dettaglio</a></button>
                                 </div> 
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>   
        </x-layout>