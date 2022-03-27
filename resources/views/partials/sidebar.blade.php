<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1e3135;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/logo_navbar.jpg') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8;">
      <span class="brand-text font-weight-light">KULIAH ID</span>
    </a>

    <!-- Sidebar  Start-->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">

          <li class="nav-header">MASTER DATA</li>
            <li class="nav-item">
              <a href="{{ route('topic.index') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Data Topik
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('tutor.index') }}" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Data Tutor
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('jabatan.index') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                 Data Jabatan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('karyawan.index') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                 Data Karyawan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('wilayah.index') }}" class="nav-link">
                <i class="nav-icon fas fa-map"></i>
                <p>
                 Data Wilayah
                </p>
              </a>
            </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                MANAGEMEN USER
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Access</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                MANAGEMEN KELAS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjadwalan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Konfirmasi Pemesanan </p>
                  <span class="badge badge-info right"> 2 </span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Riwayat Pemesanan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                SETTING INFO GRAFIS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('slidebanner.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slide Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('testimoni.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimoni</p>
                  <span class="badge badge-info right"> 2 </span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Kuliah Indo</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>