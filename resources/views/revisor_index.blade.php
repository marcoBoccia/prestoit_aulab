<x-layout>

    @if ($announcement)
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col">
                <h2 class=" display-5 fw-bold text-center">Revisiona gli annunci</h2>
            </div>
        </div>
    </div>
    
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Annuncio # {{$announcement->id}}
                    </div>
                    
                    <div class="card-body">
                        <div class="">
                            <div class="row">
                            <div class="col-md-6 col-12">
                                <h3>Utente</h3>
                            </div>
                            <div class="col-md-6 col-12">
                                {{$announcement->user->id}},
                                {{$announcement->user->name}},
                                {{$announcement->user->email}},
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-12"><h3>Titolo</h3></div>
                            <div class="col-md-6 col-12">{{$announcement->title}}</div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-12"><h3>Descrizione</h3></div>
                            <div class="col-md-6 col-12">{{$announcement->description}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12"><h3>Categoria</h3></div>
                            <div class="col-md-6 col-12">{{$announcement->category->name}}</div>
                        </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4"><h3>Immagini</h3></div>
                            <div class="col-md-8"></div>
                           
                            @foreach($announcement->images as $image) 
                        
                            <div class="row mb-2">
                                <div class="col-12 col-md-6">
                                    <img src="{{ $image->getUrl(300,150) }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-12 col-md-6 card-user">
                                    Adult 🔞:{{$image->adult}} <br>
                                    Medical 💉 :{{$image->medical}} <br>
                                    Spoof 🤬:{{$image->spoof}} <br>
                                    Violence 👊🏻🩸:{{$image->violence}} <br>
                                    Racy 👬 👬:{{$image->adult}} <br>
                                    <h5>ID: {{$image->id}}</h5> <br>
                                    

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
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <form action="{{route("revisor_reject", $announcement->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn button-reject">Reject</button>
                                    </form>
                                </div>
                                <div class="col-md-6 text-end">
                                    <form action="{{route("revisor_accepted", $announcement->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn button-accept">Accept</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </div>
    @else
        <div class="d-flex justify-content-center " >
            <h2 class="class text-danger mt-5">Non ci sono più annunci da revisionare</h2>
        </div>
    @endif
</x-layout>