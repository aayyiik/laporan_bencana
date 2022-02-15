@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Rekap Laporan</h1>
     
   
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

                    <br>
                    <a class="btn btn-info" href="" onclick="this.href='/filter-data/'+document.getElementById('tgl_awal').value+ '/' + document.getElementById('tgl_akhir').value"
                    class="btn btn-primary">Search</a>
                    <br><br>

                    <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pelapor</th>
                            <th scope="col">Nama Bencana</th>
                            <th scope="col">Nama Kecamatan</th>
                            <th scope="col">Waktu Kejadian</th>
                            <th scope="col">Status Lapor</th>
                            <th scope="col">Disetujui Oleh</th>
                          </tr>
                        </thead>
                        
                        @foreach ($lapor as $item)
                        <tbody>
                            <tr>
                              <td>{{ $item->id_lapor}}</td>
                              <td>{{ $item->warga->nama }}</td>
                              <td>{{ $item->bencana->nama_bencana }}</td>
                              <td>{{ $item->kecamatan->nama_kecamatan }}</td>
                              <td>{{ $item->waktu }}</td>
                              <td><span class="label {{ ($item->status == 1) ? 'badge rounded-pill bg-primary' : 'badge rounded-pill bg-warning text-dark'}}">{{ ($item->status == 1)
                                ? 'Telah Divalidasi' : 'Menunggu Divalidasi' }}</label></td>
                                
                              @if ($item->status == 1)
                                <td>Telah disetujui oleh petugas</td>
                              @else
                                <td>Menunggu disetujui petugas</td>
                              
                              @endif
                              
                          </tbody>
                    
                          @endforeach
                         
                      </table>
                     
                </div>
            </div>
  </main>
    
@endsection