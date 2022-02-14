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

     <header class="header-form d-flex justify-content-center align-items-center">
         <form class="form" method="POST" action="{{ route('announcement_submit') }}" enctype="multipart/form-data">

             @csrf

             <input type="hidden" name="uniqueSecret" value="{{ $uniqueSecret }}" id="uniqueSecret">
             <div class="mb-3">
                 <h5> {{ $uniqueSecret }}</h5>
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
                 <select class="form-select text-danger" name="category" id="category" multiple>
                     @foreach ($categories as $category)
                         <option value="{{ $category->id }}">
                             {{ $category->name }}
                         </option>
                     @endforeach
                 </select>
             </div>
             {{-- DROPZONE --}}
             <div class='form-group row'>
                 <label form="images" class="col-md-12 col-form-label text-md-right">Immagini
                 </label>
                 <div class="col-md-12">
     
                     <div class="dropzone" id="drophere"></div>
     
                     @error('images')
                         <span class="invalid-feedback" role="alert">
                             <strong>({ $message )}</strong>
                         </span>
                     @enderror
                 </div>
             </div>
             <button type="submit" class="button-24">Submit</button>
            </header>
        </form>
        </x-layout>
