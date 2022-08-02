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
        <img src="{{ isset(Auth::user()->picture) && !empty(Auth::user()->picture) ? ENV('FILE_URL').Auth::user()->picture : asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2">
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
              <a href="{{ url('/mainprofile') }}" class="nav-link">
                <i class="nav-icon fas fa-th-list"></i>
                <p>
                 Profile
                </p>
              </a>
            </li>
         
            <li class="nav-item">
              <a href="{{ url('/manajemenuser') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Managemen User
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Manajemen Kelas
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('penjadwalan.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penjadwalan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('absensi.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Absensi</p>
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
                  Setting Info Grafis
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
                  <a href="{{ route('setting.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Setting</p>
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