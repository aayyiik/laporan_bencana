@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
   
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Example Card</h5>
                    <form action="/add/{{ $lapor->id_lapor}}/update" method="POST">
                        @csrf
                     
                          <input type="hidden" class="form-control" name="id_lapor[0]" value="{{ $lapor->id_lapor }}" >
                       

                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="NIK[0]">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama[0]">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="umur[0]">
                        </div>
                      </div>

                      <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender[0]" id="gender1" value="Laki-Laki" checked="">
                            <label class="form-check-label" for="gender1">
                              Laki-Laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender[0]" id="gender2" value="Perempuan">
                            <label class="form-check-label" for="gender2">
                              Perempuan
                            </label>
                          </div>
                        </fieldset>
                        
                          <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kondisi</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" style="height: 100px" name="kondisi[0]"></textarea>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-auto">
                            <button type="button"  id="tambah" class="btn btn-primary btn-sm"><i class="bi bi-plus">
                                </i>
                              </button>
                              </div>
                                <div class="col-auto">
                              <button type="button"  id="hapus" class="btn btn-danger btn-sm"><i class="ri-checkbox-indeterminate-fill">
                                </i></button>
                              </div>   
                        </div>

                          <div id="form_dinamis">
    
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 col-md-10">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </div>

                          {{-- <div class="input-group mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Kondisi</label>
                            <input type="text" class="form-control"  name="kondisi[]" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <button class="btn btn-outline-primary add_more" type="button" id="button-addon2">Add</button>
                          </div> --}}

                        </div> 
                      
                    </form>
                </div>
            </div>
  </main>
    
@endsection

@push('js')
    
  <script>
    $(document).ready(function(){
      var id = 0;
      $('#tambah').click(function() {
        id++;
        $('#form_dinamis').append('<div id="NIK'+id+'"><input type="hidden" class="form-control" name="id_lapor['+id+']" value="{{ $lapor->id_lapor }}" ><div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">NIK</label><div class="col-sm-10"><input type="text" class="form-control" name="NIK['+id+']"></div></div><div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Nama</label><div class="col-sm-10"><input type="text" class="form-control" name="nama['+id+']"></div></div><div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Umur</label><div class="col-sm-10"><input type="text" class="form-control" name="umur['+id+']"></div></div><fieldset class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend><div class="col-sm-10"><div class="form-check"><input class="form-check-input" type="radio" name="gender['+id+']" id="gender1" value="Laki-Laki" checked=""><label class="form-check-label" for="gender1">Laki-Laki</label></div><div class="form-check"><input class="form-check-input" type="radio" name="gender['+id+']" id="gender2" value="Perempuan"><label class="form-check-label" for="gender2">Perempuan</label></div></fieldset><div class="row mb-3"><label for="inputPassword" class="col-sm-2 col-form-label">Kondisi</label><div class="col-sm-10"><textarea class="form-control" style="height: 100px" name="kondisi['+id+']"></textarea></div></div></div>')
      })
      $('#hapus').click(function(){
        $('#NIK'+id).remove();
        id--;
      })
    })
       
  </script>
@endpush
