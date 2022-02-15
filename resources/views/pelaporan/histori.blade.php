@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan</h1>
   
        </div><!-- End Page Title -->

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Histori Pelaporan : {{ Auth::user()->nama }}</h5>
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
                                <td>Telah disetujui oleh petugas </td>
                              @else
                                @if(auth()->user()->role=='petugas')
                                  <td><a onclick="return confirm('Apakah Anda yakin ingin mengubah status menjadi validasi ?')"  href="petugas/status/update/{{ $item->id_lapor }}" class="btn btn-primary">Validasi</a></td>
                                @else
                                <td>Menunggu disetujui petugas</td>
                                @endif
                              @endif
                              
                              <td>
                                  @if ($item->status == 1)
                                    <a href="/list/{{$item->id_lapor}}/korban" class="btn btn-secondary rounded-pill">
                                    Detail
                                    </a>
                                    @else
                                  <a href="/pelaporan/{{ $item->id_lapor }}/edit" class="btn btn-warning rounded-pill">
                                      Edit
                                  </a>
                                    @endif
                                
                               
                                </a>
                              </td>
                          </tbody>
                    
                          @endforeach
                         
                      </table>
                     
                </div>
            </div>
  </main>

  <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/pelaporan/create" method="POST">
            @csrf
         
              <div class="col-sm-10">
                <input type="hidden" class="form-control" name="id_warga" value="{{ Auth::user()->id_user }}">
              </div>
            

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Bencana</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="id_bencana">
                    <option selected="">--Pilih--</option>
                    @foreach ($bencana as $bc)
                    <option value="{{ $bc->id_bencana }}">{{ $bc->nama_bencana }}</option>
                    @endforeach
                   </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="id_kecamatan">
                    <option selected="">--Pilih--</option>
                    @foreach ($kecamatan as $kc)
                    <option value="{{ $kc->id_kecamatan }}">{{ $kc->nama_kecamatan }}</option>
                    @endforeach
                   </select>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Waktu</label>
                <div class="col-sm-10">
                  <input type="datetime-local" class="form-control" name="waktu">
                </div>
              </div>

            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    
@endsection

