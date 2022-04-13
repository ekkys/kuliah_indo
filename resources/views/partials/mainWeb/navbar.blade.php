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

                                    @if(!empty(Auth::user()))

                                        <li class="nav-login">
                                            <a class="dd-menu collapsed" href="#" data-bs-toggle="collapse"
                                                data-bs-target="#submenu-login"
                                                aria-expanded="false" aria-label="Toggle navigation">My Profile</a>
                                            <ul class="sub-menu collapse" id="submenu-login">
                                                <li class="nav-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                                                <li class="nav-item">
                                                    <a class="nav-link"  href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>

                                    @else

                                        <li class="nav-login">
                                            <a class="collapsed" href="{{ url('/login') }}" aria-label="Toggle navigation">Login / Register</a>
                                        </li>

                                    @endif

                                </ul>
                            </div> 
                            <!-- navbar collapse -->

                            @if(!empty(Auth::user()))

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
                                                <img src="{{ isset($user->picture) ? asset('storage/'.$user->picture) :  asset('assets/dist/img/user2-160x160.jpg') }}" 
                                                style="width: 40px; height: 40px; border-radius: 50%; object-fit:cover; display: block; border: 2px #fff solid;">
                                            </a>
                                            <ul class="sub-menu collapse" id="profileNavbar">
                                                <li class="nav-item"><a href="{{ url('/home') }}"><i class="lni lni-radio-button"></i>Dashboard</a></li>
                                                <li class="nav-item">
                                                    <a class="nav-link"  href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        <i class="lni lni-exit"></i>{{ __('Logout') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            @else

                                <div class="button">
                                    <a href="{{ url('/login') }}" class="btn">Login / Register</a>
                                </div>

                            @endif
                            
                            
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->