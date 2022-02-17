<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <h1 class="display-2 fw-bold text-center">Dettagli dell'annuncio</h1>
            </div>
        </div>
    </div>
    <div class="sfondo">
        <div class="row container justify-content-center mx-auto">
            <div class="col-6 my-3 d-flex">
                <div class="cardcontainer" style="width: 18rem;">
                    <div class="">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                            <!-- @foreach ($a->images as $key => $image)
                         <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img class="img-fluid card-image" src="{{ $image->getUrl(500, 500) }}"
                                class="d-block" alt="https://via.placeholder.com/150%22%3E"
                        </div> -->
                    <!-- @endforeach -->
    
                                 <div class="carousel-item active">
                                    
                                        <img src="{{$a->images->first()->getUrl(300, 150)}}" alt="immagine prodotto">
                                    
                                </div>
                                <div class="carousel-item">
                                    
                                    <img src="{{$a->images->last()->getUrl(300, 150)}}" alt="immagine prodotto">
                                
                                </div>
                                    @foreach($a->images as $image)
                                
                                    <div class="carousel-item">
                                        <img src="{{ $image->getUrl(300,150) }}" alt="immagine prodotto">
                                    </div>
                                    @endforeach

                            {{-- <div class="carousel-item active">
                                <img src="{{$a->images[0]->getUrl(300, 150)}}" alt="immagine prodotto">
                            </div> --}}
                            {{-- <div class="carousel-item">
                                <img src="{{Storage::url($a->images->all()[1]->file)}}" alt="immagine prodotto">
                            </div> --}}
                            
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> -{{$a->title}}</h5>
                        <h5 class="card-title"> -{{$a->description}}</h5>
                        <h5 class="card-title"> -{{$a->price}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>


