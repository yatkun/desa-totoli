<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-0">
  <!-- Brand Logo -->
  <a href="/dashboard" class="brand-link">
    <img src="{{ asset ('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">DASHBOARD</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- SidebarSearch Form -->
    <div class="form-inline" style="padding-top: 10px; padding-bottom:10px; ">
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
      <ul class="nav nav-pills nav-sidebar " data-widget="treeview" role="menu" data-accordion="true">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="/dashboard" class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}" >
           
            <i class="nav-icon fa-solid fa-house" style="font-size: 15px"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

     
        <li class="nav-item {{ $menu == 'Profil' ? 'menu-open' : '' }}" >
          <a href="#" class="nav-link {{ $menu == 'Profil' ? 'active' : '' }}">
        
            <i class="nav-icon fa-solid fa-building spasi2" style="font-size: 15px"></i>
            <p>
              Profil Desa
              <i class="right fas fa-angle-right" ></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="padding-left: 0 !important;">
            <li class="nav-item">
              <a href="/dashboard/visi-misi" class="nav-link {{ $title == 'Visi' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Visi Misi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/sejarah" class="nav-link {{ $title == 'Sejarah' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Sejarah</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item {{ $menu == 'Berita' ? 'menu-open' : '' }}" >
          <a href="#" class="nav-link {{ $menu == 'Berita' ? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-book spasi2" style="font-size: 15px"></i>
            <p>
              Berita
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="padding-left: 0 !important;">
            <li class="nav-item">
              <a href="/dashboard/berita" class="nav-link {{ $title == 'Berita' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Daftar Berita</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item {{ $menu == 'Pengumuman' ? 'menu-open' : '' }}" >
          <a href="#" class="nav-link {{ $menu == 'Pengumuman' ? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-bullhorn spasi2" style="font-size: 15px"></i>
            <p>
              Pengumuman
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="padding-left: 0 !important;">
            <li class="nav-item">
              <a href="/dashboard/pengumuman" class="nav-link {{ $title == 'Daftar Pengumuman' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Daftar Pengumuman</p>
              </a>
            </li>

          </ul>
        </li>


        <li class="nav-item {{ $menu == 'Penduduk' ? 'menu-open' : '' }}" >
          <a href="#" class="nav-link {{ $menu == 'Penduduk' ? 'active' : '' }}">
            <i class="nav-icon fa fa-user spasi2" style="font-size: 15px"></i>
            <p>
             Penduduk
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="padding-left: 0 !important;">
            <li class="nav-item">
              <a href="/dashboard/penduduk" class="nav-link {{ $title == 'Daftar Penduduk' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Daftar Penduduk</p>
              </a>
            </li>
         
            

          </ul>
        </li>
      
        <li class="nav-item {{ $menu == 'Master Data' ? 'menu-open' : '' }}" >
          <a href="#" class="nav-link {{ $menu == 'Master Data' ? 'active' : '' }}">
            <i class="nav-icon fa fa-user spasi2" style="font-size: 15px"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="padding-left: 0 !important;">
            <li class="nav-item">
              <a href="/dashboard/aparaturdesa" class="nav-link {{ $title == 'Aparatur Desa' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Aparatur Desa</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/dashboard/identitasdesa" class="nav-link {{ $title == 'Identitas Desa' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Identitas Desa</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item {{ $menu == 'Slider' ? 'menu-open' : '' }}" >
          <a href="#" class="nav-link {{ $menu == 'Slider' ? 'active' : '' }}">

            <i class="nav-icon fa-solid fa-images spasi2" style="font-size: 15px"></i>
            <p>
              Slider
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="padding-left: 0 !important;">
            <li class="nav-item">
              <a href="/dashboard/slider" class="nav-link {{ $title == 'Slider' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Daftar Slider</p>
              </a>
            </li>



          </ul>
        </li>

        <li class="nav-item {{ $menu == 'Galeri' ? 'menu-open' : '' }}" >
          <a href="#" class="nav-link {{ $menu == 'Galeri' ? 'active' : '' }}">

            <i class="nav-icon fa-solid fa-images spasi2" style="font-size: 15px"></i>
            <p>
              Galeri
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="padding-left: 0 !important;">
            <li class="nav-item">
              <a href="/dashboard/galeri" class="nav-link {{ $title == 'Galeri' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Daftar Galeri</p>
              </a>
            </li>



          </ul>
        </li>

        <li class="nav-item {{ $menu == 'Layanan' ? 'menu-open' : '' }}" >
          <a href="#" class="nav-link {{ $menu == 'Layanan' ? 'active' : '' }}">
     
            <i class="nav-icon fa-solid fa-clipboard spasi2" style="font-size: 15px"></i>
            <p>
              Layanan
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="padding-left: 0 !important;">
            <li class="nav-item">
              <a href="/dashboard/layanan" class="nav-link {{ $title == 'Daftar Layanan' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Daftar Layanan</p>
              </a>
            </li>



          </ul>
        </li>

        <li class="nav-item {{ $menu == 'Admin' ? 'menu-open' : '' }}" >
          <a href="#" class="nav-link {{ $menu == 'Admin' ? 'active' : '' }}">
          
            <i class="nav-icon fa-solid fa-users spasi2" style="font-size: 15px"></i>
            <p>
              Admin
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="padding-left: 0 !important;">
            <li class="nav-item">
              <a href="/dashboard/admin" class="nav-link {{ $title == 'Daftar Admin' ? 'active' : '' }}" style="padding:10px">
                <p style="padding-left: 40px;">Daftar Admin</p>
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