<x-layout>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-6 my-3 d-flex ">
                <div class="cardcontainer" style="width: 18rem;">
                    <div class="">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                
                                
                                
                                @if($a->image != "[]")
                                    
                                    @foreach($a->images as $image)
                                        
                                    
                                    <div class="carousel-item active">
                                        <img src="{{ Storage::url($image->file) }}" alt="immagine prodotto">
                                    </div>
                                    @endforeach
                                    
                                @else
                                <h1>fuck</h1>
                                <img class="img-fluid" src="https://via.placeholder.com/300x150.png">

                                @endif
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
                        <h5 class="card-title">{{$a->title}}</h5>
                        <h5 class="card-title">{{$a->description}}</h5>
                        <h5 class="card-title">{{$a->price}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>



<img src="https://via.placeholder.com/300x150.png" alt="" class="img-fluid">