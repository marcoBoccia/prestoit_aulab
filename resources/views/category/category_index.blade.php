

<x-layout>
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

    <div>
        <div class="row container justify-content-center">
            @foreach($announcements as $a)
            <div class="col-12 col-md-4 mx-0"> 
                <div class="cardcontainer" style="width:14rem;">
                    <div class="card-body text-center">
                        {{-- <h5 class="card-title">{{$a->category->name}}</h5> --}}

                        <h5 class="card-title"> -{{$a->title}}</h5>
                        <h5 class="card-title"> -{{$a->description}}</h5>
                        <h5 class="card-title"> -{{$a->price}}</h5>
                        <a href="{{route("announcement_detail", compact("a"))}}" class="button-24">Vai al dettaglio</a>
                        {{-- <a href="{{route("announcement_detail", ["a"=>$announcement])}}" class="btn btn-primary">Vai al dettaglio</a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>