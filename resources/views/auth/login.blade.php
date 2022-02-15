<x-layout>
    <section class="sfondo">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-wrapper" id="wrapper-login">
                    <div class="content-wrapper" id="content-signin">
                        <h1>Accedi</h1>
                        <form method="POST" action="{{route("login")}}" class="form-login">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="input-username" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="input-password" id="exampleInputPassword1" name="password">
                            </div>
                            <button type="submit" class="btn-login">Submit</button>
                          </form>
                          <p class="fs-5">Nessun account?<a href="{{route("register")}}">Registrati!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-layout>

