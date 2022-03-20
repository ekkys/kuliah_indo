@extends('layouts.mainWeb.main')

@section('container')

    <section class="login-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="{{ asset('mainWeb/images/logo/register-image.svg') }}" class="img-fluid login-img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4 login-title">
                                <img src="{{ asset('mainWeb/images/logo/logo-colored.svg') }}" class="img-fluid login-logo">
                                <p class="login-des">Get Free Access to Kuliah Indo.</p>
                            </div>
                            <form action="{{ route('register') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="name">{{ __('Full Name') }}</label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                                @error('name')
                                    <p role="alert" class="mb-2 pl-3">
                                        <font color="red" size="2">{{ $message }}</font>
                                    </p>
                                @enderror

                                <div class="form-group">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                @error('email')
                                    <p role="alert" class="mb-2 pl-3">
                                        <font color="red" size="2">{{ $message }}</font>
                                    </p>
                                @enderror

                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>
                                @error('password')
                                    <p role="alert" class="mb-2 pl-3">
                                        <font color="red" size="2">{{ $message }}</font>
                                    </p>
                                @enderror

                                <div class="form-group mb-4">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <input type="submit" value="{{ __('Register') }}" class="btn btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection