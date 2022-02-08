

<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <h1 class="display-2 fw-bold text-center">Annunci per categoria</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($announcements as $a)
            <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
                <div class="cardcontainer" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$a->title}}</h5>
                        <h5 class="card-title">{{$a->description}}</h5>
                        <h5 class="card-title">{{$a->price}}</h5>
                        <a href="{{route("announcement_detail", compact("a"))}}" class="button-24">Vai al dettaglio</a>
                        {{-- <a href="{{route("announcement_detail", ["a"=>$announcement])}}" class="btn btn-primary">Vai al dettaglio</a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>