@extends('layouts.mainWeb.main')

@section('container')

    <section class="login-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="{{ asset('mainWeb/images/logo/forget-image.svg') }}" class="img-fluid login-img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-md-8">
                            <div class="mb-4 login-title">
                                <img src="{{ asset('mainWeb/images/logo/logo-colored.svg') }}" class="img-fluid login-logo">
                                <p class="login-des">Lost your password?</p>
                            </div>

                            @if($message = Session::get('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span>{{ $message }}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            

                            <form action="{{url('/reset-password')}}" method="POST">
                            @csrf
                                <div class="form-group" id="form-group-email">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input type="email" id="email" class="form-control" name="email" required autocomplete="email" autofocus>
                                </div>                               
                                <input type="submit" value="Send Link" class="btn btn-block btn-primary mb-4">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection