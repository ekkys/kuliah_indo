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
                                @if(isset($message))
                                <p class="login-des">Hi, Welcome to Kuliah Indo.<br />Sign in to buy the class.</p>
                                @else
                                <p class="login-des">Hi, Welcome to Kuliah Indo.<br />Sign in to continue.</p>
                                @endif
                            </div>

                            <?php if(isset($_REQUEST['msg']) && $_REQUEST['msg'] == 'login_false') { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span>Sign in to buy course</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php } ?>
                            @error('email')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span>Wrong Email or Password</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror

                            @if(isset($status))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span>Please Check Your Email and Activate Your Account</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group" id="form-group-email">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input type="email" id="email" class="form-control" name="email" required autocomplete="email" autofocus>
                                </div>

                                <div class="form-group mb-4" id="form-group-password">
                                    <label for="password" >{{ __('Password') }}</label>
                                    <input type="password" id="password" class="form-control" name="password" required autocomplete="current-password">
                                </div>
                                <input type="submit" value="{{ __('Login') }}" class="btn btn-block btn-primary mb-4">
                                <div class="d-flex mb-2 align-items-center text-center">
                                    <span class="m-auto">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="forgot-pass">
                                                {{ __('Forgot Password?') }}
                                            </a>
                                        @endif
                                    </span> 
                                </div>
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