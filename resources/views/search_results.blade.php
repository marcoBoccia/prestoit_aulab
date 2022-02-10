<x-layout>

    <h1>risultati per {{$q}}</h1>

    @foreach ($announcements as $announcement)
            <div class="container-fluid mb-2">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="category-card">
                            
                            <p>
                                <img src="https://via.placeholder.com/300x150.png" class="rounded float-right img" alt="">
                            </p>
                            <div class="category-details">
                                <ul>
                                    <strong>Category:<a class="text-white" href="{{route('category_index', ['id'=>$announcement->category->id])}}">{{ $announcement->category->name }}</a></strong>
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
                    


</x-layout>