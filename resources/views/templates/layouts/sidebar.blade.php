<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      @if(auth()->user()->role=='warga')
      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
     @endif

     @if(auth()->user()->role=='petugas')
     <li class="nav-item">
       <a class="nav-link collapsed" href="/dashboard_petugas">
         <i class="bi bi-grid"></i>
         <span>Dashboard</span>
       </a>
     </li>
    @endif

    @if(auth()->user()->role=='admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard_admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
     @endif


      <!-- End Dashboard Nav -->

      @if(auth()->user()->role=='petugas')
      <li class="nav-item">
        <a class="nav-link collapsed" href="/rekap_laporan">
          <i class="bi bi-calendar2-event"></i>
          <span>Rekap Laporan</span>
        </a>
      </li>

      @endif

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Detail Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/pelaporan">
              <i class="bi bi-view-list"></i><span>Seluruh Pelaporan</span>
            </a>
          </li>

          @if(auth()->user()->role=='warga')
          <li>
            <a href="/pelaporan/{{ Auth::user()->id_user }}">
              <i class="bi bi-view-stacked"></i><span>Histori Laporan</span>
            </a>
          </li>
          @endif
        </ul>
      </li>
      


      @if(auth()->user()->role=='admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="/kategori_bencana">
          <i class="bi bi-card-list"></i>
          <span>Kategori Bencana</span>
        </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="/bencana">
          <i class="bi bi-cone-striped"></i>
          <span>Bencana</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/provinsi">
          <i class="bi bi-collection"> </i>
          <span>Provinsi</span>
        </a>
      </li>

      <li class="nav-item" >
        <a class="nav-link collapsed" href="/kota">
          <i class="bi bi-geo-alt"></i>
          <span>Kota</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/kecamatan">
          <i class="bi bi-map"></i>
          <span>Kecamatan</span>
        </a>
      </li>

      @endif

      

      <!-- End Tables Nav -->

 

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/profilsetting/{{ Auth::user()->id_user }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->



    </ul>

  </aside>