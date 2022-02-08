<x-layout>
@if (session("status"))
        <div class="alert alert-warning">
            {{session("status")}}
        </div>
    @endif

    <div class="container">
        <div class="row">
        @foreach($announcements as $a)
        <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$a->title}}</h5>
                    <h5 class="card-title">{{$a->description}}</h5>
                    <h5 class="card-title">{{$a->price}}</h5>
                    <a href="{{route("announcement_detail", compact("a"))}}" class="btn btn-primary">Vai al dettaglio</a>
                   {{--  <a href="{{route("announcement_detail", ["a"=>$announcement])}}" class="btn btn-primary">Vai al dettaglio</a> --}}
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</x-layout>