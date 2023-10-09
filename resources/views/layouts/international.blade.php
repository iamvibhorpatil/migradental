@extends('layouts.includes.main')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg-common-img-slider.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">International Client</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('international')}}">Home <i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></a></span> <span>International Client</span></p>
                </div>
            </div>
        </div>
    </section>



@endsection
