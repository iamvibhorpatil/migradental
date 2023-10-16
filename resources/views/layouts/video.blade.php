
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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;"  data-stellar-background-ratio="0.5">
    <div class="overlay" ></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread" style="color:white;"> Videos </h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-md-2 col-sm-12 col-lg-2">
                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                </div>
            </div>
            <div class="col-md-10 col-sm-12 col-lg-10">
                <div class="row">
                    
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                              <video class="block-20 d-flex" controls src="assets/videos/orafacial-pain-01FPR.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="text pt-3 text-center">
                              <h3 class="heading"><a href="{{route('orofacial_pain')}}">Orafacial Pain</a></h3>
                            
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                              <video class="block-20 d-flex" controls src="assets/videos/orafacial-pain-01FPR.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="text pt-3 text-center">
                              <h3 class="heading"><a href="{{route('orofacial_pain')}}">Orafacial Pain</a></h3>
                            
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                              <video class="block-20 d-flex" controls src="assets/videos/orafacial-pain-01FPR.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="text pt-3 text-center">
                              <h3 class="heading"><a href="{{route('orofacial_pain')}}">Orafacial Pain</a></h3>
                            
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection










