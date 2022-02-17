

<x-layout >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <h1 class="display-2 fw-bold text-center">Annunci per categoria</h1>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col">
            
            <h2 class="display-4 fw-bold text-center text-primary">
                {{$category}}
            </h2>

        </div>
    </div>

    <div class="container"  >
        <div class="row">
            @foreach($announcements as $a)
            <div class="col-6" > 
                <div class="cardcontainer">
                    <div class="card-body text-center">
                       
                        @if($a->images->toArray() != "[]")
                        @foreach($a->images as $image)
                            
                                <img src="{{ $image->getUrl(300,150) }}" alt="immagine prodotto">
                        @endforeach
                        
                    @else
                    <h1>fuck</h1>
                    <img class="img-fluid" src="https://via.placeholder.com/300x150.png">

                    @endif 
                        <h5 class="card-title"> -{{$a->title}}</h5>
                        <h5 class="card-title"> -{{$a->description}}</h5>
                        <h5 class="card-title"> -{{$a->price}}</h5>
                        <a href="{{route("announcement_detail", compact("a"))}}" class="button-24">Vai al dettaglio</a>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>