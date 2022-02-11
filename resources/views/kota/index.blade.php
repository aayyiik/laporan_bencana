@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kota</h1>
   
        </div><!-- End Page Title -->

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Tabel Kota</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                        Tambah
                      </button>
                    <br><br>

                    <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kota</th>
                            <th scope="col">Nama Provinsi</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        @foreach ($kota as $item)
                        <tbody>
                            <tr>
                              <td>{{ $item->id_kota }}</td>
                              <td>{{ $item->provinsi->nama_provinsi }}</td>
                              <td>{{ $item->nama_kota }}</td>
                              <td>
                                  <a href="/kota/{{ $item->id_kota }}/edit" class="btn btn-warning rounded-pill">
                                      Edit
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
            <form action="/kota/create" method="POST">
            @csrf

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Provinsi</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="id_provinsi">
                    <option selected="">--Pilih--</option>
                    @foreach ($provinsi as $pr)
                    <option value="{{ $pr->id_provinsi }}">{{ $pr->nama_provinsi }}</option>
                    @endforeach
                   </select>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama kota</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_kota">
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

