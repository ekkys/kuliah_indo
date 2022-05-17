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
            <form action="#">
                @csrf

                <input type="text" name="user_id" id="user_id" value="{{ isset($user)? $user->id :'' }}">
                <input type="text" name="penjadwalan_id" id="penjadwalan_id" value="{{ $dataKelas->id}}">
                <input type="date" name="tanggal_order" id="tanggal_order" value="{{ date('Y-m-d') }}">
                <input type="text" name="amount" id="amount" value="{{ $dataKelas->price}}">
                <input type="text" name="transaction_id" id="transaction_id" value={{rand(10,10000)}}>
                <input type="text" name="status" id="status" value="pending">

                <div class="add-to-cart" style="display: flex;">
                    <div class="container">
                        <div class="row p-0 m-0 d-flex">
                            <div class="col-8">
                                <span class="course-price">{{ $dataKelas->price == '0' ? 'Free' : 'Rp '.number_format($dataKelas->price) }}</span>
                                <span class="course-old-price" style="display: none">Rp 1.000.000</span>
                            </div>
                            <div class="col-4 text-center">
                                <div class="cart-wrapper">
                                    <button onclick="order()" class="add-to-cart-button" > Buy Course </button>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{
        !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}"
        data-client-key="{{ config('services.midtrans.clientKey')}}"></script>
    <script>
    
      
      //arahkan route store kesini
      
        var user_id = document.getElementById('user_id').value;
        var penjadwalan_id = document.getElementById('penjadwalan_id').value;
        var transaction_id = document.getElementById('transaction_id').value;
        var tanggal = document.getElementById('tanggal_order').value;
        var amount = document.getElementById('amount').value;
        var status = document.getElementById('status').value;

        function order() {
        console.log('user id : ', user_id);
        console.log('Jadwal id :', penjadwalan_id);
        console.log('Transaction :', transaction_id);
        console.log('Date :', $('#tanggal_order').val());
        console.log('Amount :', amount);
        console.log('Status :', status);
        }

      $.post("/kuliah_indo/order_course", {
                _method: 'POST',
                _token: '{{ csrf_token() }}',
                user_id:user_id,
                penjadwalan_id:penjadwalan_id,
                transaction_id:transaction_id,
                purchase_date:tanggal,
                amount:amount,
                status:status
            },

            function (data, status) {
                console.log(data);
                if(data.is_login) {
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
                } else {
                    window.location.href = "/kuliah_indo/login?msg=login_false";
                }
                // return false;
            });

    </script>

@endsection