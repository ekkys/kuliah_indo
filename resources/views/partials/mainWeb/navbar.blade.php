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
                                    <li class="nav-login">
                                        <a href="{{ url('/login') }}" aria-label="Toggle navigation">Login / Register</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button">
                                <a href="{{ url('/login') }}" class="btn">Login / Register</a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->