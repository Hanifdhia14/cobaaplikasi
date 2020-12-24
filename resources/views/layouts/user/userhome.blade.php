@extends('layouts.user.usermaster')

<style media="screen">
  div.card{
margin-bot
}
  div.col-xl-8{
  margin-left: 200pt;
}
</style>

  @section('content')


    <div class="content-wrapper">
    <!-- Content Dashboard -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control Planing</small>
      </h1>
    </section>
<!-- End Content Dashboard -->
      <div class="card">
        <div class="card-header">

<!-- Content Koatak -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  Pendapatan (Monthly)</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<!-- End Content Koatak -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Earnings (Monthly)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>



          <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Index Pencapaian </h6>
                      <div class="dropdown no-arrow">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                              <div class="dropdown-header">Dropdown Header:</div>
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                      </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                      <div class="chart-area">
                          <canvas id="myAreaChart"></canvas>
                      </div>
                  </div>
              </div>
          </div>

        </div>

      </div>
  </div>

  @endsection