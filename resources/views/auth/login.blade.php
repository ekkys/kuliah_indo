@extends('layouts.mainWeb.main')

@section('container')

    <section class="login-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('mainWeb/images/logo/login-image.svg') }}" class="img-fluid login-img">
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4 login-title">
                                <img src="{{ asset('mainWeb/images/logo/logo-colored.svg') }}" class="img-fluid login-logo">
                                <p class="login-des">Hi, Welcome to Kuliah Indo.<br />Sign in to continue.</p>
                            </div>
                            <form action="#" method="post">
                                <div class="form-group first" id="form-group-email">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" required autocomplete="email" autofocus>
                                </div>
                                <div class="form-group last mb-4" id="form-group-password">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" required autofocus>
                                </div>
                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                      <input type="checkbox" checked="checked"/>
                                      <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                                </div>
                                <input type="submit" value="Sign In" class="btn btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection