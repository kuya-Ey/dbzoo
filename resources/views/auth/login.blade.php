@extends('layouts.app')

@section('content')
<body class="landing">
<div class="container-fluid">
    <div class="d-grid gap-2 d-md-flex justify-content-center logo-login">
        <img src="{{ asset('/images/d_barking_zoo-bg.png')}}" alt="">
    </div>
    <div class="login">
        <div class="d-grid gap-3 col-8 ">
            <!-- Button trigger modal -->
            <button class="btn btn-primary btn-lg " type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ENTER</button>
            {{-- Sign up Button --}}
            <a class="btn btn-info btn-sm" href="/select-a-role" role="button">Sign Up</a>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <div class="card-header">{{ __('Login') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                            @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4 mb-3">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn-1 btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    </div>
</div>
</body>
@endsection
