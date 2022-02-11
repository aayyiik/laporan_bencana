@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
   
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Example Card</h5>
                    <form action="/add/update" method="POST">
                        @csrf
                     
                        @foreach ($korban as $item)
                        
                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="NIK[0]" value="{{ $item->NIK }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama[0]" value="{{ $item->nama }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="umur[0]" value="{{ $item->umur }}">
                        </div>
                      </div>
                      <p>
                      <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender[]" id="gender1" value="Male"{{$item->gender == 'Male'? 'checked' : ''}}>
                            <label class="form-check-label" for="gender1">
                                Laki-laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender[]" id="gender2" value="Female"{{$item->gender == 'Female'? 'checked' : ''}}  >
                            <label class="form-check-label" for="gender2">
                              Perempuan
                            </label>
                          </div>
                        </fieldset>
                    </p>
                          <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kondisi</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" style="height: 100px" name="kondisi[0]" >{{ $item->kondisi }}</textarea>
                            </div>
                          </div>
                        
                          @endforeach

                         

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