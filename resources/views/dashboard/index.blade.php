@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>dashboard</h1>
    
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi</h5>
                    <p>Halo, {{ Auth::user()->nama }} Selamat Datang</p>
                    <p>Apabila disekitar linkunganmu saat ini sedang terjadi bencana alam</p>
                    <p>Segera laporkan kepada kami di : <a href="/pelaporan/{{ Auth::user()->id_user }}" class="btn btn-danger rounded-pill">
                      Laporkan!
                    </a></p>
                    <p>Lihat juga update bencana alam di : <a href="/pelaporan" class="btn btn-warning rounded-pill">
                      Posko Laporan
                    </a></p>
                    <br>
                    <p>Salam Kami! Petugas Penanganan Laporan Bencana Alam Indonesia</p>
 
                </div>
            </div>
  </main>
    
@endsection