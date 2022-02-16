<x-layout>

    @if ($announcement)
        
    
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header">
                        Annuncio # {{$announcement->id}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Utente</h3>
                            </div>
                            <div class="col-md-10">
                                {{$announcement->user->id}},
                                {{$announcement->user->name}},
                                {{$announcement->user->email}},
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-2"><h3>Titolo</h3></div>
                            <div class="col-md-10">{{$announcement->title}}</div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-2"><h3>Descrizione</h3></div>
                            <div class="col-md-10">{{$announcement->description}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"><h3>Categoria</h3></div>
                            <div class="col-md-10">{{$announcement->category->name}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"><h3>Immagini</h3></div>
                            <div class="col-md-10"></div>
                           
                            @foreach($announcement->images as $image)
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <!-- <img src="{{ $image->getUrl(300,150) }}" class="d-block w-100" alt="..."-->
                                        <!-- INIZIO CAROSELLO -->
                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                            <!-- @foreach ($a->images as $key => $image)
                         <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img class="img-fluid card-image" src="{{ $image->getUrl(500, 500) }}"
                                class="d-block" alt="https://via.placeholder.com/150%22%3E"
                        </div> -->
                    <!-- @endforeach -->
    
                                 <div class="carousel-item active">
                                    
                                        <img src="{{$a->images->first()->getUrl(300, 150)}}" alt="immagine prodotto">
                                    
                                </div>
                                <div class="carousel-item">
                                    
                                    <img src="{{$a->images->last()->getUrl(300, 150)}}" alt="immagine prodotto">
                                
                                </div>
                                    @foreach($a->images as $image)
                                
                                    <div class="carousel-item">
                                        <img src="{{ $image->getUrl(300,150) }}" alt="immagine prodotto">
                                    </div>
                                    @endforeach

                            {{-- <div class="carousel-item active">
                                <img src="{{$a->images[0]->getUrl(300, 150)}}" alt="immagine prodotto">
                            </div> --}}
                            {{-- <div class="carousel-item">
                                <img src="{{Storage::url($a->images->all()[1]->file)}}" alt="immagine prodotto">
                            </div> --}}
                            
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                                        <!-- FINE CAROSELLO -->

                                 
                                </div>
                                <div class="col-md-8">
                                    Adult 🔞:{{$image->adult}} <br>
                                    Medical 💉 :{{$image->medical}} <br>
                                    Spoof 🤬:{{$image->spoof}} <br>
                                    Violence 👊🏻🩸:{{$image->violence}} <br>
                                    Racy 👬 👬:{{$image->adult}} <br>
                                    {{$image->id}} <br>
                                    {{$image->file}} <br>
                                    {{Storage::url($image->file)}} <br>

                                    <strong>Labels</strong>
                                    <ul>
                                        @if ($image->labels)
                                          @foreach ($image->labels as $label)
                                                <li>{{$label}}</li>
                                          @endforeach
                                            
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{route("revisor_reject", $announcement->id)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Reject</button>
                </form>
            </div>
            <div class="col-md-6 text-end">
                <form action="{{route("revisor_accepted", $announcement->id)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Accept</button>
                </form>
            </div>
        </div>
        
    </div>
    @else
        <div class="d-flex justify-content-center " >
            <h2 class="class text-danger mt-5">Non ci sono più annunci da revisionare</h2>
        </div>
    @endif
</x-layout>