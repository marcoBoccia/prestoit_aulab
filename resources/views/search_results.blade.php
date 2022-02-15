<x-layout>

    <h1>risultati per {{$q}}</h1>

    @foreach ($announcements as $announcement)
            <div class="container-fluid mb-2">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="category-card">
                            @foreach($announcement->images as $image)
                            <p>
                                <img src="{{$image->getUrl(300,150) }}" class="rounded float-right img" alt="">
                            </p>
                            @endforeach
                            <div class="text-dark">
                                <ul>
                                    <strong>Category:<a href="{{route('category_index', ['id'=>$announcement->category->id])}}"> {{ $announcement->category->name }}</a></strong>
                                    <li>{{ $announcement->title }}</li>
                                    <li>{{ $announcement->description }}</li>
                                    <li>{{ $announcement->price }}$</li>
                                    <li>{{ $announcement->created_at->format('d/m/Y') }}</li>
                                    <li>inserito da: {{ $announcement->user->name}}</li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
@endforeach


<!-- MEtodo PAginator -->
<!-- $announcements->links -->
                    


</x-layout>