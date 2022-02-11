@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
      <h1>Login Sebagai:
       </h1>
   
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Example Card</h5>
                                          
                      <form action="/kecamatan/{{ $kecamatan->id_kecamatan }}/update" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">kota</label>
                            <div class="col-sm-10">
                              <select class="form-select" aria-label="Default select example" name="id_kota">
                                {{-- <option selected="">--Pilih--</option> --}}
                                @foreach ($kota as $kt)
                                <option value="{{ $kt->id_kota }}" {{ $kt->id_kota == $kecamatan->id_kota ? 'selected' : '' }} > {{ $kt->nama_kota }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Kecamatan</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nama_kecamatan" value="{{ $kecamatan->nama_kecamatan }}">
                            </div>
                          </div>
                        
                      
                      <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      </form>
                    </div>
                                   
  </main>
    
@endsection
