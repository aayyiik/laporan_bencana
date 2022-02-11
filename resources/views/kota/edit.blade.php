@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Kota</h1>
   
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Kota</h5>
                    
                <form action="/kota/{{ $kota->id_kota }}/update" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Provinsi</label>
                        <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="id_provinsi">
                            {{-- <option selected="">--Pilih--</option> --}}
                            @foreach ($provinsi as $pv)
                            <option value="{{ $pv->id_provinsi }}" {{ $pv->id_provinsi == $kota->id_provinsi ? 'selected' : '' }} > {{ $pv->nama_provinsi }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Kota</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_kota" value="{{ $kota->nama_kota }}">
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                </form>
                                </div>
                            
  </main>
    
@endsection
