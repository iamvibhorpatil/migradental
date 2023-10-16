@extends('layouts.includes.main')

@section('content')



<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;background-position: center;"  data-stellar-background-ratio="0.5">
    <div class="overlay" ></div>
        <div class="container">
            <div class="row  slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread" style="color:white;"> International Clients</h1>
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


 @endsection
 

