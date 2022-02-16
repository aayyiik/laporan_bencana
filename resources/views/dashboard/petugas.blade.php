@extends('templates.master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>dashboard</h1>
    </div><!-- End Page Title -->


    <div class="col-xxl-4 col-md-12">
        <div class="card info-card sales-card">

        <div class="card-body">
            <h3 class="card-title"> </h3>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-shield-exclamation"></i>
                <div class="ps-3">
                    <h6>Total Laporan</h6>
                    <span class="text-success fw-bold">{{ $lapor }}</span> 
                    <p>
                    <span class="text-muted small pt-2 ps-1">
                        <a href="/pelaporan" >
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
                <h3 class="card-title"></h3>
    
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-shield-plus"></i>
                    <div class="ps-3">
                        <h6>Total Korban</h6>
                        <span class="text-success fw-bold">{{ $korban }}</span> 
                        <p>
                        <span class="text-muted small pt-2 ps-1">
                            <a href="/pelaporan">
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
                  <h3 class="card-title"></h3>
      
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shield-plus"></i>
                      <div class="ps-3">
                          <h6>Total Korban Luka Ringan</h6>
                          <span class="text-success fw-bold">{{ $luka_ringan }}</span> 
                          <p>
                          <span class="text-muted small pt-2 ps-1">
                              <a href="/pelaporan">
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
                    <h3 class="card-title"></h3>
        
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-shield-plus"></i>
                        <div class="ps-3">
                            <h6>Total Korban Luka Berat</h6>
                            <span class="text-success fw-bold">{{ $luka_berat }}</span> 
                            <p>
                            <span class="text-muted small pt-2 ps-1">
                                <a href="/pelaporan">
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
                      <h3 class="card-title"></h3>
          
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-shield-plus"></i>
                          <div class="ps-3">
                              <h6>Total Korban Meninggal</h6>
                              <span class="text-success fw-bold">{{ $meninggal }}</span> 
                              <p>
                              <span class="text-muted small pt-2 ps-1">
                                  <a href="/pelaporan">
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
                        <h3 class="card-title"></h3>
            
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-shield-plus"></i>
                            <div class="ps-3">
                                <h6>Total Korban Selamat</h6>
                                <span class="text-success fw-bold">{{ $selamat }}</span> 
                                <p>
                                <span class="text-muted small pt-2 ps-1">
                                    <a href="/pelaporan">
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
