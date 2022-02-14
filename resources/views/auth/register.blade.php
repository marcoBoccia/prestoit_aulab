<x-layout>
    <div class="container">
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
                        <form method="POST" action="{{route("register")}}" class="form-login">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nome</label>
                                <input type="text" class="input-username" name="name">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="input-username" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="input-password" id="exampleInputPassword1" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Conferma la password</label>
                                <input type="password" class="input-password" id="exampleInputPassword1" name="password_confirmation">
                              </div>
                            <button type="submit" class="btn-login">Submit</button>
                          </form>
                          <p class="fs-5">Sei già registrato?<a href="{{route("login")}}">Accedi</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>