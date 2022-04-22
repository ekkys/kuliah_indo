@extends('layouts.mainWeb.main')

@section('container')

    <!-- Start Single Post Banner -->
    <section class="single-post section">
        <div class="container">
            <div class="single-post-wrapper">
                <div class="logo-wrapper">
                    <img src="{{ asset('mainWeb/images/logo/iconlogo.svg') }}" class="logo">
                </div>
                <div class="company-wrapper">
                    <h6 class="company">Kuliah Indo</h6>
                </div>
                <div class="class-name-wrapper">
                    <span class="class-name">{{ $dataKelas->title }}</span>
                </div>
                <div class="date-wrapper">
                    <?php 
                    
                        $date = explode( " - ", $dataKelas->date);
                        $startDate = str_replace('/', '-', $date[0]);
                        $endDate = str_replace('/', '-', $date[1]);
                        $startTime = $dataKelas->timestart;
                        $endTime = $dataKelas->timeend;
                    
                    ?>
                    <span class="date">{{ date('F d, Y', strtotime($startDate)) }} - {{ date('F d, Y', strtotime($endDate)) }} | {{ $startTime }} - {{ $endTime }}</span>
                </div>
                <div class="moderator-container">
                    <div class="row container-fluid" style="margin: auto">
                        <div class="image-wrapper align-self-center col-lg-3 col-md-3 col-sm-0">
                            <img src="{{ asset('mainWeb/images/team/team1.jpg') }}" alt="">
                        </div>
                        <div class="moderator-wrapper col-lg-3 col-md-3 col-sm-4">
                            <div class="moderator-about">
                                <center>Pembawa Materi</center>
                            </div>
                            <div class="moderator-name">
                                <center>{{ $dataKelas->tutor }}</center>
                            </div>
                        </div>
                        <div class="moderator-wrapper col-lg-3 col-md-3 col-sm-4">
                            <div class="moderator-about">
                                <center>Sebagai</center>
                            </div>
                            <div class="moderator-name">
                                <center>{{ $dataKelas->jabatan }}</center>
                            </div>
                        </div>
                        <div class="moderator-wrapper col-lg-3 col-md-3 col-sm-4">
                            <div class="moderator-about">
                                <center>Kategori</center>
                            </div>
                            <div class="moderator-name">
                                <center>{{ $dataKelas->topic }}</center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Single Post Banner -->

    <!-- Start Single Post Article -->
    <section class="article bg-gray section">
        <div class="container">

            {{-- Bottom Navbar --}}
            <form action="#" method="post" id="order_course_form">
                @csrf

                <input type="text" name="user_id" id="user_id" value="{{ isset($user)? $user->id :'' }}">
                <input type="text" name="penjadwalan_id" id="penjadwalan_id" value="{{ $dataKelas->title}}">
                <input type="date" name="purchase_date" id="purchase_date" value="">
                <input type="text" name="amount" id="amount" value="{{ $dataKelas->price}}">

                <div class="add-to-cart">
                    <div class="container">
                        <div class="row p-0 m-0 d-flex">
                            <div class="col-8">
                                <span class="course-price">{{ $dataKelas->price == '0' ? 'Free' : 'Rp '.number_format($dataKelas->price) }}</span>
                                <span class="course-old-price" style="display: none">Rp 1.000.000</span>
                            </div>
                            <div class="col-4 text-center">
                                <div class="cart-wrapper">
                                    <button type="submit" class="add-to-cart-button"  > Buy Course </button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </form>
            {{-- End Bottom Navbar --}}

            {{-- Description --}}
            <div class="article-wrapper">
                {!! $dataKelas->description !!}
            </div>
            {{-- End Description --}}

        </div>
    </section>
    <!-- End Single Post Article -->

    @include('partials.mainWeb.footer')


    <script src="{{
        !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}"
        data-client-key="{{ config('services.midtrans.clientKey')
    }}"></script>

<script>
    $("#order_course_form").submit(function(event) {
        event.preventDefault();

        $.post("/api/order_course", {
            _method: 'POST',
            _token: '{{ csrf_token() }}',
            user_id: $('input#user_id').val(),
            penjadwalan_id: $('input#penjadwalan_id').val(),
            penjadwalan_id: $('input#penjadwalan_id').val(),
            donation_type: $('select#donation_type').val(),
            amount: $('input#amount').val(),
        },

        function (data, status) {
            console.log(data);
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    console.log(JSON.stringify(result, null, 2));
                    location.replace('/');
                },
                // Optional
                onPending: function (result) {
                    console.log(JSON.stringify(result, null, 2));
                    location.replace('/');
                },
                // Optional
                onError: function (result) {
                    console.log(JSON.stringify(result, null, 2));
                    location.replace('/');
                }
            });
            return false;
        });
    })
</script>
@endsection