 <x-layout>

     @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
<div class="container sfondoform">
    <div class="row justify-content-center">
        <div class="col-6 d-flex justify-content-center flex-column  ">
            <header class=" d-flex justify-content-evenly mt-5 formannunci">
                <form class=" d-flex justify-content-evenly flex-column" method="POST" action="{{ route('announcement_submit') }}" enctype="multipart/form-data">
       
                    @csrf
       
                    <input type="hidden" name="uniqueSecret" value="{{ $uniqueSecret }}" id="uniqueSecret">
                    <div class="mb-3">
                        <h5 style="display:none"> {{ $uniqueSecret }}</h5>
                        <label for="exampleInputEmail1" class="form-label text-white">Inserisci il titolo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="title" value="{{old('title')}}">
       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white">Inserisci la descrizione</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{old('description')}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label text-white">Inserisci il prezzo</label>
                        <input type="text" class="form-control" name="price" value="{{old('price')}}">
                    </div>
                    <div class="mb-3">
                        <select class="form-select text-danger" name="category" id="category" >
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </header>
        </div>
        {{-- DROPZONE --}}
        <div class="col-6 d-flex justify-content-center flex-column formdropzone">
            <div class='form-group '>
                <label form="images" class="col-md-12 col-form-label text-white text-md-right">Inserisci le tue immagini
                </label>
                <!-- <div class="col-md-12"> -->
            
                    <div class="dropzone" id="drophere"></div>
            
                    @error('images')
                        <span class="invalid-feedback" role="alert">
                            <strong>({ $message )}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="button-24 mt-5">Submit</button>
                <!-- </div> -->
            </div>
            
            
        </div>
    </div>
</div>
     

    
        </x-layout>
