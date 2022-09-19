<x-app-layouts title="Login Page">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <main class="form-signin w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                    <form action="{{ route('post.login') }}" method="post">
                      @csrf
                      <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                      </div>
                  
                      <div class="checkbox mb-3">
                        <label>
                          <input type="checkbox" value="remember-me"> Remember me
                        </label>
                      </div>
                      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                    <form>
                        <small class="d-block text-center mt-2">Not Registered? <a href="{{ route('register') }}">Register Now!</a></small>
                    </form>
                  </main>
            </div>
        </div>
    </div>
    
</x-app-layouts>