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
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        @foreach ($kategori as $item)
                        <tbody>
                            <tr>
                              <td>{{ $item->id_kategori }}</td>
                              <td>{{ $item->jenis_kategori }}</td>
                              <td>
                                  <a href="/bab/create" class="btn btn-warning rounded-pill">
                                      Edit
                                  </a>
                                  <a href="/bab/create" class="btn btn-danger rounded-pill">
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
          <h5 class="modal-title">Tambah Data Kategori Bencana</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/kategori_bencana/create" method="POST">
            @csrf

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Jenis Bencana</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="jenis_kategori">
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

