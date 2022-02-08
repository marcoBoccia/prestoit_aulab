<x-layout>
@if (session("status"))
        <div class="alert alert-warning">
            {{session("status")}}
        </div>
    @endif

    <div class="container">
        <div class="row">
        @foreach($announcements as $a)
        <div class="col-12 col-md-6 my-3 d-flex justify-content-center">
            <div class="cardcontainer">
                <div class="card-body text-center">
                    <h4 class="card-title">{{$a->title}}</h4>
                    <h4 class="card-title">{{$a->description}}</h4>
                    <h4 class="card-title">{{$a->price}}</h4>
                    <a href="{{route("announcement_detail", compact("a"))}}" class="button-24">Vai al dettaglio</a>
                   {{--  <a href="{{route("announcement_detail", ["a"=>$announcement])}}" class="btn btn-primary">Vai al dettaglio</a> --}}
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</x-layout>



