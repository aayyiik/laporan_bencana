@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kategori Bencana</h1>
   
        </div><!-- End Page Title -->

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Tabel Kategori</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                        Tambah
                      </button>
                    <br><br>

                    <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori Bencana</th>
                            <th scope="col">Nama Bencana</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        @foreach ($bencana as $item)
                        <tbody>
                            <tr>
                              <td>{{ $item->id_bencana }}</td>
                              <td>{{ $item->kategori->jenis_kategori }}</td>
                              <td>{{ $item->nama_bencana }}</td>
                              <td>
                                  <a href="/bencana/{{ $item->id_bencana }}/edit" class="btn btn-warning rounded-pill">
                                      Edit
                                  </a>
                                  <a href="/bencana/{{ $item->id_bencana }}/delete" class="btn btn-danger rounded-pill">
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
          <h5 class="modal-title">Tambah Data Bencana</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/bencana/create" method="POST">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="id_kategori">
                    <option selected="">--Pilih--</option>
                    @foreach ($kategori as $kt)
                    <option value="{{ $kt->id_kategori }}">{{ $kt->jenis_kategori }}</option>
                    @endforeach
                   </select>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Bencana</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_bencana">
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

