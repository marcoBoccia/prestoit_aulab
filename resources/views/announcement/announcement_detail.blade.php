<x-layout>
    <div class="container">
        <div class="row">
        
        <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <img src="https://via.placeholder.com/300x150.png" alt="" class="img-fluid">
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