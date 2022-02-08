<x-layout>

    <div class="container-fluid masthead">
        <div class="row justify-content-center">
            <div class="col-6 mt-4">
                <h1 class="display-3 fw-bold text-center">Benvenuti in Presto</h1>
            </div>
        </div>
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



        <!-- ULTIMI 5 ANNUNCI -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <h1 class="display-2 fw-bold text-center">Ultimi annunci</h1>
                </div>
            </div>
        
            @foreach ($announcements as $announcement)
            <div class="row justify-content-center mb-5 mt-5">
                <div class="col">
                    <div class="cardcontainer">
                        <div class="">
                            {{ $announcement->title }}
                        </div>
                        <div class="card-body">
                            <p>
                                <img src="https://via.placeholder.com/300x150.png" class="rounded float-right" alt="">
                                {{ $announcement->description }}
    
                            </p>
                        </div>
                        <div class="d-flex justify-content-between">
                           
                            <strong>Category:<a href="{{route('category_index', ['id'=>$announcement->category->id])}}">{{ $announcement->category->name }}</a></strong>
                           
                            <i>{{$announcement->price}}</i>
                            <i>{{ $announcement->created_at->format('d/m/Y') }} - {{ $announcement->id }}</i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
  








</x-layout>