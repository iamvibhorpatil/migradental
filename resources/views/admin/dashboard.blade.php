@extends('admin.index1')

@section('content')
<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
      </nav>
      {{-- half-nav  --}}
      @include('admin.half_nav')
       {{-- half-nav  --}}
    </div>
  </nav>
  <!-- End Navbar -->

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card" style="min-height: 100%">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers" >
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Patients</p>
                  <h5 class="font-weight-bolder">
                    {{-- +{{ $todayInquiryCount }} --}}
                  </h5>
                  
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card" style="min-height: 100%">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Inquiries</p>
                  <h5 class="font-weight-bolder">
                   {{-- {{ $totalInquiryCount }} --}} 
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card" style="min-height: 100%">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold text-nowrap">Today's Job Application</p>
                  <h5 class="font-weight-bolder">
                      {{-- +{{ $todayJobCount }} --}}     
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
       <div class="col-xl-3 col-sm-6">
        <div class="card" style="min-height: 100%">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold text-nowrap">Total Job Application</p>
                  <h5 class="font-weight-bolder">
                        {{-- {{ $totalJobCount }} --}} 
                  </h5>
                  
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                  <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
       
      
    </div>

@endsection