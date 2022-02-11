@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Setting Profil</h1>
    
        </div><!-- End Page Title -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lihat Profil Kamu</h5>
                    <div class="tab-pane fade profile-edit pt-3 active show" id="profile-edit">

                        <!-- Profile Edit Form -->
                        <form action="/profil/update/{{ $user->id_user }}" method="POST">
                            @csrf
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">nama</label>
                            <div class="col-md-8 col-lg-9">
                              <input  type="text" name="nama" class="form-control" id="fullName" value="{{ $user->nama }}">
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                            <div class="col-md-8 col-lg-9">
                              <input  type="text" class="form-control" name="email" id="company" value="{{ $user->email }}">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">tgl lahir</label>
                            <div class="col-md-8 col-lg-9">
                              <input " type="text" class="form-control" name="tgl_lahir" id="company" value="{{ $user->tgl_lahir }}">
                            </div>
                          </div>
      
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                          </div>
                        </form><!-- End Profile Edit Form -->
      
                      </div>
                </div>
            </div>
  </main>
    
@endsection