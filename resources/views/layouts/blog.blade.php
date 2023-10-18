@extends('layouts.includes.main')
@section('content')
    <!-- <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg-common-img-slider.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <h1 class="mb-2 bread">International Client</h1>
                        
                    </div>
                </div>
            </div>
        </section> -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h2 class="mb-2 bread font-weight-normal" style="color:white;"> Blogs </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-md-3 col-sm-12 col-lg-3">
                <button type="button" class="btn web_bg px-5 py-2 mt-3 rounded-0 w-100 wow fadeInLeft">Button</button>
                <hr class="m-0">


            </div>
            <div class="col-md-9 col-sm-12 col-lg-9 ">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4 wow fadeInUp">
                        <div class="card mx-auto">
                            <img src="{{ asset('assets/images/dept-4.jpg') }}" class="card-img-top p-2" alt="...">
                            <div class="card-body py-2 text-center">
                                <h5 class="card-title">Title</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4  wow fadeInUp">
                        <div class="card mx-auto">
                            <img src="{{ asset('assets/images/dept-4.jpg') }}" class="card-img-top p-2" alt="...">
                            <div class="card-body py-2 text-center">
                                <h5 class="card-title">Title</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 wow fadeInUp">
                        <div class="card mx-auto">
                            <img src="{{ asset('assets/images/dept-4.jpg') }}" class="card-img-top p-2" alt="...">
                            <div class="card-body py-2 text-center">
                                <h5 class="card-title">Title</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
