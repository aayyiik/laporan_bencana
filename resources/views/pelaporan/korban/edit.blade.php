@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Page</h1>
   
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Korban</h5>
                    <form action="/korban/{{ $korban->id_detail }}/update" method="POST">
                        @csrf
                      
                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="NIK" value="{{ $korban->NIK }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama" value="{{ $korban->nama }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="umur" value="{{ $korban->umur }}">
                        </div>
                      </div>
                     
                      <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender1" value="Laki-Laki"{{$korban->gender == 'Laki-Laki'? 'checked' : ''}}>
                            <label class="form-check-label" for="gender1">
                                Laki-Laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender2" value="Perempuan"{{$korban->gender == 'Perempuan'? 'checked' : ''}}  >
                            <label class="form-check-label" for="gender2">
                              Perempuan
                            </label>
                          </div>
                        </fieldset>
                    
                          <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kondisi</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" style="height: 100px" name="kondisi" >{{ $korban->kondisi }}</textarea>
                            </div>
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