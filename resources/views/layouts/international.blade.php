@extends('layouts.includes.main')

@section('content')



<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;background-position: center;"  data-stellar-background-ratio="0.5">
    <div class="overlay" ></div>
        <div class="container">
            <div class="row  slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h2 class="mb-2 bread font-weight-normal" style="color:white;"> International Clients</h2>
                </div>
            </div>
        </div>
</section>


<div class="container container-treatment mb-5">

        <div class="left-side-treatment bg-white pt-5 align-self-baseline">
            
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/images/orofacial048ID.png" class="d-block w-100" alt="img">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/orofacial096ID.png" class="d-block w-100" alt="img">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/orofacial107ID.png" class="d-block w-100" alt="img">
                    </div>
                </div>
            </div>
        </div>

        <div class="right-side-treatment pt-0 my-4">
            <div class="right-side-content-treatment">
                <div id="accordion">

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link accordion-title" data-toggle="collapse" href="#collapseOne">
                            What is lorem?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate 
                                the visual form of a document or a typeface without relying on meaningful content. 
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseTwo">
                            Why is lorem?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                                the visual form of a document or a typeface without relying on meaningful content. 
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
</div>
<div class="container-fluid mb-4" style="background-color:grey;">
        <div class="">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-request-call-sec-left pl-5">
                    <div class="title">
                        <h2 class="text-light">Connect with Us for Global Dental Care</h2>
                    </div>
                    <p class="sub-title text-light">If you're an international visitor, get in touch for personalized service. We're here to assist you!</p>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 pr-5">
                    <div class="pl-3 pr-3 pt-4">
                    <form action="#">
                        <div class="d-flex form-group justify-content-between">
                            <div class="pr-3 w-50">
                                <input type="text" class="form-control" placeholder="Name *" required="">
                            </div>
                            <div class="pr-3 w-50">
                                <input type="tel" class="form-control" placeholder="Mobile No *" required="">
                            </div>
                        </div>
                        <div class="form-group pr-3">
                                <input type="email" class="form-control" placeholder="Email *" required="">
                        </div>
                        <div class="form-group pr-3">
                            <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="submit-button" value="Send Your Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

 @endsection
 

