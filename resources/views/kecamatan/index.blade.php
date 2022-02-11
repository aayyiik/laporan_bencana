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
                            <th scope="col">Nama Kota</th>
                            <th scope="col">Nama Kecamatan</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        @foreach ($kecamatan as $item)
                        <tbody>
                            <tr>
                              <td>{{ $item->id_kecamatan }}</td>
                              <td>{{ $item->kota->nama_kota }}</td>
                              <td>{{ $item->nama_kecamatan }}</td>
                              <td>
                                  <a href="/kecamatan/{{ $item->id_kecamatan }}/edit" class="btn btn-warning rounded-pill">
                                      Edit
                                  </a>
                                  <a href="/kecamatan/{{ $item->id_kecamatan }}/delete" class="btn btn-danger rounded-pill">
                                      Hapus
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
            <form action="/kecamatan/create" method="POST">
            @csrf

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">kota</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="id_kota">
                    <option selected="">--Pilih--</option>
                    @foreach ($kota as $kt)
                    <option value="{{ $kt->id_kota }}">{{ $kt->nama_kota }}</option>
                    @endforeach
                   </select>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Kecamatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_kecamatan">
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

