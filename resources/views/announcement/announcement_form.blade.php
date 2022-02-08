<x-layout>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <form method="POST" action="{{route('announcement_submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci il titolo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{old('title')}}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inserisci la descrizione</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{old('description')}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Inserisci il prezzo</label>
                        <input type="text" class="form-control" name="price" value="{{old('price')}}">
                    </div>
                    <div class="mb-3">
                            <select class="text-warning bg-dark border-warning" name="category" id="category" multiple>
                           @foreach ($categories as $category)
                               <option value="{{$category->id}}">
                                {{$category->name}}
                                </option>
                           @endforeach
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>