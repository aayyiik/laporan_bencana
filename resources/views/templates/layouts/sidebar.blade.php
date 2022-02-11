<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Detail Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/pelaporan">
              <i class="bi bi-circle"></i><span>Pelaporan</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Detail Laporan</span>
            </a>
          </li>
        </ul>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="/kategori_bencana">
          <i class="bi bi-grid"></i>
          <span>Kategori Bencana</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/bencana">
          <i class="bi bi-grid"></i>
          <span>Bencana</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/provinsi">
          <i class="bi bi-grid"></i>
          <span>Provinsi</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/kota">
          <i class="bi bi-grid"></i>
          <span>Kota</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/kecamatan">
          <i class="bi bi-grid"></i>
          <span>Kecamatan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/rekap_laporan">
          <i class="bi bi-grid"></i>
          <span>Rekap Laporan</span>
        </a>
      </li>

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