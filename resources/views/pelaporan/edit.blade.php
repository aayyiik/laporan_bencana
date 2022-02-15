@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit lapor</h1>
   
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data lapor</h5>
                    
                <form action="/pelaporan/{{ $lapor->id_lapor }}/update" method="POST">
                    @csrf

                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="id_warga" value="{{ Auth::user()->id_user }}">
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">bencana</label>
                        <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="id_bencana">
                            {{-- <option selected="">--Pilih--</option> --}}
                            @foreach ($bencana as $bc)
                            <option value="{{ $bc->id_bencana }}" {{ $bc->id_bencana == $lapor->id_bencana ? 'selected' : '' }} > {{ $bc->nama_bencana }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">kecamatan</label>
                        <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="id_kecamatan">
                            {{-- <option selected="">--Pilih--</option> --}}
                            @foreach ($kecamatan as $kc)
                            <option value="{{ $kc->id_kecamatan }}" {{ $kc->id_kecamatan == $lapor->id_kecamatan ? 'selected' : '' }} > {{ $kc->nama_kecamatan }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" name="waktu" value="{{ $lapor->waktu }}">
                        </div>
                    </div>

                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="status" value="0">
                      </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
             </div>
                            
  </main>
    
@endsection
