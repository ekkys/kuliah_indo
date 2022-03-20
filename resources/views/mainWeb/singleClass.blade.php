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
                    <span class="class-name">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</span>
                </div>
                <div class="date-wrapper">
                    <span class="date">13 Maret 2022 | 19:30 - 21:30</span>
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
                                <center>Erika Safitri</center>
                            </div>
                        </div>
                        <div class="moderator-wrapper col-lg-3 col-md-3 col-sm-4">
                            <div class="moderator-about">
                                <center>Sebagai</center>
                            </div>
                            <div class="moderator-name">
                                <center>CEO Kuliah Indo</center>
                            </div>
                        </div>
                        <div class="moderator-wrapper col-lg-3 col-md-3 col-sm-4">
                            <div class="moderator-about">
                                <center>Kategori</center>
                            </div>
                            <div class="moderator-name">
                                <center>Engineering Design</center>
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
            <div class="add-to-cart">
                <div class="container">
                    <div class="row p-0 m-0 d-flex">
                        <div class="col-8 text-center">
                            <span class="course-price">Rp 499.000</span>
                            <span class="course-old-price">Rp 1.000.000</span>
                        </div>
                        <div class="col-4 text-center">
                            <div class="cart-wrapper">
                                <button class="add-to-cart-button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="article-wrapper">
                <img src="{{ asset('mainWeb/images/hero/slide1.png') }}" style="width: 800px; height: auto;">
            </div>
            <div class="article-wrapper">
                <span>Deskripsi</span>
                <p>CNC adalah bahwa Mesin ini merupakan mesin yang digunakan dalam proses manufaktur yang biasanya menggunakan kontrol terkomputerisasi dan peralatan mesin. Kelebihan yang paling dominan yaitu kecepatan dalam proses produksi sehingga cocok digunakan untuk produksi masal.</p>
            </div>
            <div class="article-wrapper">
                <span>Penting banget belajar revit ??</span>
                <p>
                    Membuat program CNC sesuai produk yang akan dibuat dengan cara pengetikan langsung pada HMI mesin maupun dibuat pada komputer dengan perangkat lunak pemrograman CNC.
                    <br /><br />
                    <strong style="font-weight: bold">Hari 1 :</strong> <br />
                    - Pengenalan CNC di industri <br />
                    - Pengenalan Work Coordinate System <br />
                    - Penjelasan bagian - bagian program CNC <br />
                    - Perhitungan parameter pemotongan <br />
                    - Pengenalan kode dasar CNC <br />
                    - Tool offset, header & footer, Kompensasi tool <br />
                    <br /><br />
                    <strong style="font-weight: bold">Hari 2 :</strong> <br />
                    - Konfigurasi program<br />
                    - Subprogram (M98 M99)<br />
                    - Canned Cycles (Siklus canned) dasar<br />
                    - Trial program pada simulator<br />
                    <br /><br />
                    <strong style="font-weight: bold">Hari 3 :</strong> <br />
                    - Alur kerja mastercam untuk milling<br />
                    - Menu dasar mastercam (Maastercam X9)<br />
                    - Menggambar Sketsa 2D Milling (Mastercam X9)<br />
                    - Membuat sketsa 3D Milling<br />
                    - Pemilihan tipe mesin, cutting tool, dan benda kerja<br />
                    - Penentuan proses dan toolpath<br />
                    - Verifikasi dan simulasi Operasi & Toolpath<br />
                    - Generate dan Editing G-Code<br />
                    - Simulasi dengan software CNC Simulator
                </p>
            </div>
        </div>
    </section>
    <!-- End Single Post Article -->

    @include('partials.mainWeb.footer')

@endsection