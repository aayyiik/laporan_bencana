@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan</h1>
   
        </div><!-- End Page Title -->

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Tabel Pelaporan</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                        Tambah
                      </button>
                    <br><br>

                    <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Action</th>
                           
                          </tr>
                        </thead>
                        
                        @foreach ($detail as $item)
                        <tbody>
                            <tr>
                              <td>{{ $item->id_detail}}</td>
                              <td>{{ $item->NIK }}</td>
                              <td>{{ $item->nama }}</td>
                              <td>{{ $item->umur }}</td>
                              <td>{{ $item->gender }}</td>
                              <td>{{ $item->kondisi }}</td>
                              
                    
                              <td>
                                @if(auth()->user()->role != 'admin')
                                  <a href="/pelaporan/{{ $item->id_lapor }}/edit" class="btn btn-warning rounded-pill">
                                      Edit
                                  </a>
                                  @endif
                                
                          </tbody>
                    
                          @endforeach
                         
                      </table>
                     
                </div>
            </div>
  </main>

    
@endsection

