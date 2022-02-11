@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Provinsi</h1>
 
   
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Provinsi</h5>
                    
                            <form action="/provinsi/{{ $provinsi->id_provinsi }}/update" method="POST">
                                @csrf
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Nama provinsi</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_provinsi" value="{{ $provinsi->nama_provinsi }}">
                                                </div>
                                            </div>
                                   
                                
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                             
  </main>
    
@endsection
