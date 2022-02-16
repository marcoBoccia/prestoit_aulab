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

    <div class="sfondoform min-vh-100" >
        <div class=" my-5" >
            <div class="">
                <header class="">

                    <form style="margin-left: 0; margin-right: 0" class="row  justify-content-evenly" method="POST" action="{{ route('announcement_submit') }}" enctype="multipart/form-data">

                        @csrf

                        <div class= "col-4  formannunci">
                            <input type="hidden" name="uniqueSecret" value="{{ $uniqueSecret }}" id="uniqueSecret">
                            <div class="mb-3">
                                <h5 style="color: red"> {{ $uniqueSecret }}</h5>

                                
                                <label for="exampleInputEmail1" class="form-label text-white">Inserisci il titolo</label>
                                @if($errors->any() && isset($errors->toArray()['title']))
                                    <p class="text-danger fw-bold d-inline">{{  $errors->toArray()['title'][0] }}</p>
                                @endif
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{old('title')}}">

                            </div>

                            <div class="mb-3">
                                
                                <label for="exampleInputPassword1" class="form-label text-white">Inserisci la descrizione</label>
                                @if($errors->any() && isset($errors->toArray()['description']))
                                <p class="text-danger fw-bold d-inline" >{{ $errors->toArray()['description'][0] }}</p>
                                @endif
                                <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{old('description')}}">
                            </div>

                            <div class="mb-3">
                                
                                <label for="exampleInputText" class="form-label text-white">Inserisci il prezzo</label>
                                @if($errors->any() && isset($errors->toArray()['price']))
                                    <p class="text-danger fw-bold d-inline">{{ $errors->toArray()['price'][0] }}</p>
                                @endif
                                <input type="text" class="form-control" name="price" value="{{old('price')}}">
                            </div>

                            <div class="mb-3">
                                
                                <label for="" class="form-label text-white" >inserisci categoria</label>
                                @if($errors->any() && isset($errors->toArray()['category']))
                                    <p class="text-danger fw-bold d-inline">{{ $errors->toArray()['category'][0] }}</p>
                                @endif
                                <select class="form-select text-danger" name="category" id="category">
                                    <option value=" "></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if (old('category') == "$category->id") {{ 'selected' }} @endif>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    

                        <!-- {{-- DROPZONE --}} -->
                        <div class="col-4 formdropzone ">
                            <div class='form-group '>
                                <label form="images" class="col-md-12 col-form-label text-white text-md-right">Inserisci le tue immagini
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

                            <button type="submit" class="button-24 mt-3">Submit</button>
                        </div>

                        
                    </form>

                </header>
            </div>
        </div>
    </div>


</x-layout>
