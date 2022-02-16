

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
            
            <h2 class="display-4 fw-bold text-center">
                {{$category}}
            </h2>

        </div>
    </div>

    <div class="container" style="border: 2px solid red">
        <div class="row justify-content-evenly">
            @foreach($announcements as $a)
            <div class="col-12 col-md-4"> 
                <div class="formannunci2" style="max-width: 10rem">
                    <div class="card-body text-center">
                        {{-- <h5 class="card-title">{{$a->category->name}}</h5> --}}

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