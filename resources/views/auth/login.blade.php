@extends('layouts.app')
@section('content')
<div class="b-example-divider"></div>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">LOGIN FORM</h1>
            <p class="col-lg-10 fs-4">Please login in the following form. If you don't have an account, please register first.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <form class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="floatingInput">Email Addres</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <button type="submit" class="w-100 btn btn-lg btn-primary">
                        {{ __('Login') }}
                    </button>
                    <hr class="my-4">
                    <center>
                        @if (Route::has('register'))
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                        @endif

                    </center>
                </form>
            </form>
        </div>
    </div>
</div>
@endsection