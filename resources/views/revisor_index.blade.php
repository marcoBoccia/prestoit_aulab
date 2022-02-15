<x-layout>

    @if ($announcement)
        
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                            <div class="col-md-2"><h3>Immagini</h3></div>
                            <div class="col-md-10"></div>
                           
                            @foreach($announcement->images as $image)
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <img src="{{ $image->getUrl(300,150) }}" class="d-block w-100" alt="...">
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
        <div class="d-flex justify-content-center">
            <h2 class="class text-danger mt-5">Non ci sono più annunci da revisionare</h2>
        </div>
    @endif
</x-layout>