@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kecamatan</h1>
   
        </div><!-- End Page Title -->

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Tabel Kecamatan</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                        Tambah
                      </button>
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
                            <th scope="col">Action</th>
                           
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
                                <td>Telah disetujui oleh petugas Unit 03</td>
                              @else
                                @if(auth()->user()->role=='petugas')
                                  <td><a onclick="return confirm('Apakah Anda yakin ingin mengubah status menjadi validasi ?')"  href="petugas/status/update/{{ $item->id_lapor }}" class="btn btn-primary">Validasi</a></td>
                                @else
                                <td>Menunggu disetujui petugas</td>
                                @endif
                              @endif
                              
                              <td>
                                @if(auth()->user()->role=='warga,petugas')
                                  <a href="/bab/create" class="btn btn-warning rounded-pill">
                                      Edit
                                  </a>
                                  <a href="/bab/create" class="btn btn-danger rounded-pill">
                                      Hapus
                                  </a>
                                  @endif
                                  
                                  <a href="/bab/create" class="btn btn-secondary rounded-pill">
                                    Detail
                                  </a>
                                
                                  @if(auth()->user()->role=='petugas')
                                  <a href="/add/{{ $item->id_lapor }}" class="btn btn-success rounded-pill">
                                    add detail
                                  @endif
                                </a>
                              </td>
                          </tbody>
                    
                          @endforeach
                         
                      </table>
                     
                </div>
            </div>
  </main>

 
    
@endsection

