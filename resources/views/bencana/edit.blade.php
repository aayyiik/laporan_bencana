@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Bencana</h1>
 
   
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Bencana</h5>
                    
                            <form action="/bencana/{{ $bencana->id_bencana }}/update" method="POST">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="id_kategori">
                                        {{-- <option selected="">--Pilih--</option> --}}
                                        @foreach ($kategori as $kt)
                                        <option value="{{ $kt->id_kategori }}" {{ $kt->id_kategori == $bencana->id_kategori ? 'selected' : '' }} > {{ $kt->jenis_kategori }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Nama bencana</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_bencana" value="{{ $bencana->nama_bencana }}">
                                                </div>
                                            </div>
                                   
                                
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
  </main>
    
@endsection
