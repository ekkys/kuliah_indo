@extends('layouts.mainWeb.main')

@section('container')

    <section class="login-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="{{ asset('mainWeb/images/logo/login-image.svg') }}" class="img-fluid login-img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4 login-title">
                                <img src="{{ asset('mainWeb/images/logo/logo-colored.svg') }}" class="img-fluid login-logo">
                                <p class="login-des">Hi, Welcome to Kuliah Indo.<br />Sign in to continue.</p>
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="form-group" id="form-group-email">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                                </div>
                                @error('email')
                                    <p role="alert" class="mb-2 pl-3">
                                        <font color="red" size="2">Email salah</font>
                                    </p>
                                @enderror

                                <div class="form-group mb-4" id="form-group-password">
                                    <label for="password" >{{ __('Password') }}</label>
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>
                                @error('password')
                                    <p role="alert" class="mb-2 pl-3">
                                        <font color="red" size="2">Password salah</font>
                                    </p>
                                @enderror

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0" for="remember"><span class="caption">{{ __('Remember Me') }}</span>
                                      <input type="checkbox" {{ old('remember') ? 'checked' : '' }} name="remember" id="remember"/>
                                      <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="forgot-pass">
                                                {{ __('Forgot Password?') }}
                                            </a>
                                        @endif
                                    </span> 
                                </div>
                                <input type="submit" value="{{ __('Login') }}" class="btn btn-block btn-primary mb-4">
                                <div class="login-title text-center">
                                    <span class="login-des">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection