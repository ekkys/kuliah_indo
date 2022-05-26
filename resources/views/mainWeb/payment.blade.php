@extends('layouts.mainWeb.main')

@section('container')
    <!-- Start Single Post Article -->
    <section class="article bg-gray section">
        <iframe src="{{$link}}" width="100%" height="1000" style="margin-top:-50px"> </iframe>
    </section>
    <!-- End Single Post Article -->


@include('partials.mainWeb.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection         