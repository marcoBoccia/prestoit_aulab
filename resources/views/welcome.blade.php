<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Benvenuti in Presto</h1>
            </div>
        </div>

        @foreach ($announcements as $announcement)
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ $announcement->title }}
                        </div>
                        <div class="card-body">
                            <p>
                                <img src="https://via.placeholder.com/300x150.png" class="rounded float-right" alt="">
                                {{ $announcement->description }}

                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">    
                            @foreach ($categories as $category)
                            @if ($category->id==$announcement->category_id)
                            <strong>Category:<a href="#">{{ $category->name }}</a></strong>    
                            @endif
                            @endforeach
                            <i>{{$announcement->price}}</i>
                            <i>{{ $announcement->created_at->format('d/m/Y') }} - {{ $announcement->id }}</i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>