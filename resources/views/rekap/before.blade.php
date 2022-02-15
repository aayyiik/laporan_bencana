@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan</h1>
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Laporan</h5>
                    <div class="form-group">
                        <label for="tgl_awal">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tgl_awal" name="tgl_awal" 
                            required>
                    </div>

                    <div class="form-group">
                        <label for="tgl_akhir">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" 
                            required>
                    </div>

                    
                    <a class="btn btn-info" href="" onclick="this.href='/filter-data/'+document.getElementById('tgl_awal').value+ '/' + document.getElementById('tgl_akhir').value"
                    class="btn btn-primary">Search</a>

                    
                     
                </div>
            </div>
  </main>
    
@endsection