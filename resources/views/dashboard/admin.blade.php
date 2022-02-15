@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
    </div><!-- End Page Title -->


    <div class="col-xxl-4 col-md-12">
        <div class="card info-card sales-card">

        <div class="card-body">
            <h3 class="card-title"> </h3>
             <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-cone-striped"></i>
                <div class="ps-3">
                    <h6>Total Bencana</h6>
                    <span class="text-success fw-bold">{{ $bencana }}</span> 
                    <p>
                    <span class="text-muted small pt-2 ps-1">
                        <a href="/bencana" >
                            View Detail
                        </a>
                    </span>
                    </p>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card info-card sales-card">

            <div class="card-body">
                <h3 class="card-title"> </h3>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-card-list"></i>
                    <div class="ps-3">
                        <h6>Total Kategori Bencana</h6>
                        <span class="text-success fw-bold">{{ $kategori }}</span> 
                        <p>
                        <span class="text-muted small pt-2 ps-1">
                            <a href="/kategori">
                                View Detail
                            </a>
                        </span>
                        </p>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card info-card sales-card">

                <div class="card-body">
                    <h3 class="card-title"> </h3>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-geo-alt"></i>
                        <div class="ps-3">
                            <h6>Total Kota</h6>
                            <span class="text-success fw-bold">{{ $kota }}</span> 
                            <p>
                            <span class="text-muted small pt-2 ps-1">
                                <a href="/kota">
                                    View Detail
                                </a>
                            </span>
                            </p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h3 class="card-title"> </h3>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-collection"></i>
                            <div class="ps-3">
                                <h6>Total Provinsi</h6>
                                <span class="text-success fw-bold">{{ $provinsi }}</span> 
                                <p>
                                <span class="text-muted small pt-2 ps-1">
                                    <a href="/provinsi">
                                        View Detail
                                    </a>
                                </span>
                                </p>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h3 class="card-title"> </h3>
                            <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-map"></i>
                                <div class="ps-3">
                                    <h6>Total Kecamatan</h6>
                                    <span class="text-success fw-bold">{{ $kecamatan }}</span> 
                                    <p>
                                    <span class="text-muted small pt-2 ps-1">
                                        <a href="/kecamatan">
                                            View Detail
                                        </a>
                                    </span>
                                    </p>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
    


          

        </div>
      </div>

    

     
  </main>
    
@endsection
