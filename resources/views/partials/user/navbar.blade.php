<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  @if(Auth::user()->hasRole('admin') == true)

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link"  href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        </a>
    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
  </ul>
  
  @else

  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    </li>
  </ul>

  @endif

    </nav>