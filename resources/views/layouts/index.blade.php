@extends('layouts.includes.main')


@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(assets/images/slider-img1.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                   <!-- catchy lines -->
                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image:url(assets/images/slider-img2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                      <!-- catchy lines -->
                </div>
            </div>
        </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
        <div class="card index-what-who-card-left">
            <div class="row no-gutters">
                <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                    <div class="heading-section mb-5">
                        <div class="pl-md-5 ml-md-5">
                        <!-- pt-md-5 -->
                            <h2 class="mb-2" style="font-size: 32px;font-weight: 700">What We Are?</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5"style="font-weight:600;">
                        <p>Welcome to Migradent! We are your trusted source for all things related to migration.</p>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit delectus, quisquam dolore beatae quod soluta cupiditate, eum facere quidem odit quia illum repudiandae quos id!</p>
                    </div>
                </div>

                <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(assets/images/dept-4.jpg);">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
        <div class="card index-what-who-card-right">
        <div class="row no-gutters">
                 <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(assets/images/image_5.jpg);">
                </div>
                <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                    <div class="heading-section mb-5">
                        <div class="pl-md-5 ml-md-5">
                        <!-- pt-md-5 -->
                            <h2 class="mb-2" style="font-size: 32px; font-weight: 700">Who We Are?</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5"style="font-weight:600;">
                        <p>Welcome to Migradent! We are your trusted source for all things related to migration.</p>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit delectus, quisquam dolore beatae quod soluta cupiditate, eum facere quidem odit quia illum repudiandae quos id!</p>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">   
    <div class="container mb-5">
        <div class="text-center mt-5">
            <h1>Our Clinic Services</h1>
        </div>
        <div class="row">
            <div class=" col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/6NKPrhO.png"> </div>
                        <h4><a href="{{route('orofacial_pain')}}">Orofacial Pain</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/KMbnpFF.png"> </div>
                        <h4>Migraine & TMJ</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/AgyneKA.png"> </div>
                        <h4>TMD</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/AgyneKA.png"> </div>
                        <h4>Dental Sleep Medicine</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/vdH9LKi.png"> </div>
                        <h4>TMD</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/v6OnUqu.png"> </div>
                        <h4>Dental Sleep Medicine</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/VzjZw9M.png"> </div>
                        <h4>Laser Dentistry</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/VzjZw9M.png"> </div>
                        <h4>Full Mouth Rehabilation</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/vdH9LKi.png"> </div>
                        <h4>Veneers & Laminates</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/v6OnUqu.png"> </div>
                        <h4>Smile Designing</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/VzjZw9M.png"> </div>
                        <h4>Dental Implants</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/VzjZw9M.png"> </div>
                        <h4>Laser Teeth Whitening</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/vdH9LKi.png"> </div>
                        <h4>Root Canal</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/v6OnUqu.png"> </div>
                        <h4>Root Canal Treatment with Laser</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/VzjZw9M.png"> </div>
                        <h4>Child Care Dentistry</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="our-services-box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="https://i.imgur.com/VzjZw9M.png"> </div>
                        <h4>Orthodontics & Aligners</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>    
    @endsection