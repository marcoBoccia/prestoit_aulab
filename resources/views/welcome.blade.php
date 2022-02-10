<x-layout>

    <div class="container-fluid masthead back">
        <div class="row justify-content-center">

            @if (session("access.denied.revisor.only"))
                <div class="alert alert-danger">
                    {{session("access.denied.revisor.only")}}
                </div>
             @endif
             
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <h1 class="display-2 fw-bold text-center">Benvenuti in Presto</h1>
        </div>
        

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

            <hr>


        <div class="container border border-danger d-flex flex-column align-items-center">
            <form  method="GET" action="{{route('search')}}">
                <label for="">cerca annuncio</label>
                <input type="text" name="q">
                <button type="submit"  class= "btn btn-primary">cerca</button>
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
        
        
        
            @foreach ($announcements as $announcement)
                        <div class="container-fluid mb-2">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <div class="category-card">
                                        <i>{{ $announcement->title }}</i>
                                        <p>
                                            <img src="https://via.placeholder.com/300x150.png" class="rounded float-right img" alt="">
                                        </p>
                                        <div class="category-details">
                                            <ul>
                                                <strong>Category:<a class="text-white" href="{{route('category_index', ['id'=>$announcement->category->id])}}">{{ $announcement->category->name }}</a></strong>
                                                <li>{{ $announcement->description }}</li>
                                                <li>{{ $announcement->price }}$</li>
                                                <li>{{ $announcement->created_at->format('d/m/Y') }}</li>
                                                <li>inserito da: {{ $announcement->user->name}}</li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
            @endforeach
                    
                   
                                    
                                      
                       
                                    
  

</x-layout>