@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit kategori</h1>
   
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Kategori</h5>
                    <form action="/kategori/{{ $kategori->id_kategori }}/update" method="POST">
                        @csrf
                    
                          <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama kategori</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="jenis_kategori" value="{{ $kategori->jenis_kategori }}">
                            </div>
                          </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    
                    </form>
                </div>
                </div>
            </div>
  </main>
    
@endsection

