<x-layout>
@if (session("status"))
        <div class="alert alert-warning">
            {{session("status")}}
        </div>
    @endif



    <div class="container">
        <div class="row">
        @foreach($announcements as $announcement)
        <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$announcement["title"]}}</h5>
                    <h5 class="card-title">{{$announcement["description"]}}</h5>
                    <a href="" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
        </div>
        @endforeach
        </div>
    </div>
</x-layout>