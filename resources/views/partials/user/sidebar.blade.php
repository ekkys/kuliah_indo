<?php

  if(empty(Auth::user()->name)) {
    header('Location: {{ url("/login") }}');
  }

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('mainWeb/images/logo/logo-icon-white.svg') }}" alt="AdminLTE Logo Icon" class="brand-image">
      <img src="{{ asset('mainWeb/images/logo/logo-text-white.svg') }}" alt="AdminLTE Logo Text" class="brand-text ">
    </a>

    <!-- Sidebar  Start-->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <div class="form-photo thumbnail elevation-2">
          <div style="background: url({{ isset($user->picture) ? asset('storage/'.$user->picture) :  asset('assets/dist/img/user2-160x160.jpg') }}); background-size: cover;" class="photo"></div>
        </div>
      </div>
      <div class="info">
        <span class="d-block">{{ Auth::user()->name }}</span>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">

          <li class="nav-header">Home</li>
            <li class="nav-item">
              <a href="{{ url('/') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                Home
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/home') }}" class="nav-link">
                <i class="nav-icon fas fa-archive"></i>
                <p>
                Dashboard
                </p>
              </a>
            </li>

          <li class="nav-header">User</li>
           <li class="nav-item">
             <a href="{{ url('/home/myprofile') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Profile
              </p>
             </a>
           </li>

          <li class="nav-header">Menu</li>
            <li class="nav-item">
              <a href="{{ url('/home/mycourse') }}" class="nav-link">
                <i class="nav-icon fas fa-book-open"></i>
                <p>
                My Course
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/home/payment') }}" class="nav-link">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
                <p>
                 Payment
                </p>
              </a>
            </li>
         </li>

         <li class="nav-header">Setting</li>
           <li class="nav-item">
             <a href="{{ url('/home/changepassword') }}" class="nav-link">
               <i class="nav-icon fas fa-lock"></i>
               <p>
               Change Password
               </p>
             </a>
           </li>
           <li class="nav-item">
            <a class="nav-link"href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
              Logout
              </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>