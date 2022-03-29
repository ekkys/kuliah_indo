<!-- Start Header Area -->
<header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('mainWeb/images/logo/logo2.svg') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{ url('/') }}" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/profile') }}" aria-label="Toggle navigation">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/class') }}" aria-label="Toggle navigation">Class</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/contact') }}" aria-label="Toggle navigation">Contact</a>
                                    </li>
                                    {{-- <li class="nav-login">
                                        <a class="dd-menu collapsed" href="{{ url('/login') }}" aria-label="Toggle navigation">Login / Register</a>
                                    </li> --}}
                                    <li class="nav-login">
                                        <a class="dd-menu collapsed" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-login"
                                            aria-expanded="false" aria-label="Toggle navigation">My Profile</a>
                                        <ul class="sub-menu collapse" id="submenu-login">
                                            <li class="nav-item"><a href="#">Course Saya</a></li>
                                            <li class="nav-item"><a href="#">Pembayaran</a></li>
                                            <li class="nav-item"><a href="#">Pengaturan Akun</a></li>
                                            <li class="nav-item"><a href="#">Keluar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> 
                            <!-- navbar collapse -->
                            {{-- <div class="button">
                                <a href="{{ url('/login') }}" class="btn">Login / Register</a>
                            </div> --}}
                            <div>
                                <ul id="nav" class="navbar-profile ms-auto">
                                    <li class="nav-item">
                                        <a 
                                        href="#user" 
                                        class="btn" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#profileNavbar" 
                                        aria-expanded="false" 
                                        aria-label="Toggle navigation"
                                        >
                                            <img src="{{ asset('mainWeb/images/team/Foto-Nurika.jpg') }}" 
                                            style="width: 40px; height: 40px; border-radius: 50%; object-fit:cover; display: block; border: 2px #fff solid;">
                                        </a>
                                        <ul class="sub-menu collapse" id="profileNavbar">
                                            <li class="nav-item"><a href="#"><i class="lni lni-library"></i>Course Saya</a></li>
                                            <li class="nav-item"><a href="#"><i class="lni lni-coin"></i> Pembayaran</a></li>
                                            <li class="nav-item"><a href="#"><i class="lni lni-cog"></i>Pengaturan Akun</a></li>
                                            <li class="nav-item"><a href="#"><i class="lni lni-exit"></i>Keluar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->