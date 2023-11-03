@extends('layouts.includes.main')


@section('content')
<section class="home-slider owl-carousel">
<div class="slider-item" style="background-image:url(assets/images/slider-img-1.webp);"
    data-stellar-background-ratio="0.5"> </div> <div class="slider-item"
    style="background-image:url(assets/images/slider-img-2.webp);" data-stellar-background-ratio="0.5"> </div>
</section>

<!-- why choose us -->

<div class="container"> <div class="card mb-3 shadow-lg animated fadeInLeft"> <div class="row g-0">
    <div class="col-md-7">
    <div class="card-body what-who-sec">
    <div class="text-center mb-4">
        <h5 class="card-title" style="font-size: 32px; font-weight: 700;">What We Are?</h5>
    </div>
    <div class=" mb-5">
        <p>At the core of our mission is a profound dedication to improving lives and fostering
            healthier communities. Dr. Sarrah Husain is not only a skilled dental practitioner but
            also a
            compassionate advocate for those who suffer from debilitating conditions. Here's a
            glimpse
            of who we are and what we stand for:</p>
        <a href="{{ Route('about') }}#What_we_are">
            <button type="button" class="btn custom-btn-what-why">
                Read More
            </button>
        </a>
    </div>
</div>
</div>
<div class="col-md-5 d-flex align-items-center justify-content-center">
    <img src="assets/images/image_5.jpg" class="img-fluid rounded-start" alt="Our Services"
        style="max-width: 100%; height: -webkit-fill-available;" />
</div>
</div>
</div>




<div class="card mb-3 mt-5 shadow-lg animated fadeInRight">
    <div class="row g-0">
        <div class="col-md-5 d-flex align-items-center justify-content-center">
            <img src="assets/images/dept-4.jpg" class="img-fluid rounded-start" alt="Our Team"
                style="max-width: 100%; height: -webkit-fill-available;">
        </div>

        <div class="col-md-7">
            <div class="card-body what-who-sec">
                <div class="text-center mb-4">
                    <h5 class="card-title" style="font-size: 32px; font-weight: 700;">Who We Are?</h5>
                </div>
                <div class="mb-5">
                    <p>Dr. Sarrah Husain is a distinguished figure in the field of dentistry, with an
                        unwavering
                        commitment to excellence in patient care and professional growth. With 17 years of
                        dedicated practice as a conservative dentist, she has recently taken a significant
                        leap in her
                        career by pursuing a specialized Orofacial Pain Fellowship.
                    </p>
                    <a href="{{ Route('about') }}#Who_we_are"><button type="button" class="btn custom-btn-what-why">
                            Read More
                        </button></a>

                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>

<section class="ftco-section ftco-services">
    <div class="shadow bg-light pb-5 mr-md-5 ml-md-5" style="border-radius:50px;">
        <div class="container">
            <div class="text-center my-3">
                <h1>Our Clinic Services</h1>
            </div>

            <div class="row services-row">
                <div class=" col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/orofacial-pain.png"> </div>
                            <h4><a href="">Orofacial Pain</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/migrane-tmj.png"> </div>
                            <h4>Migraine & TMJ</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/tmd.png"> </div>
                            <h4>TMD</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/dental-sleep-medicine.png">
                            </div>
                            <h4>Dental Sleep Medicine</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/tmd.png"> </div>
                            <h4>Headaches</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/dental-sleep-medicine.png">
                            </div>
                            <h4>Dental Surgeries with laser</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/laser-dentistry.png"> </div>
                            <h4>Child Care Dentistry</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/full-mouth-rehabilation.png">
                            </div>
                            <h4>Full Mouth Rehabilation</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/veneers-laminates.png"> </div>
                            <h4>Veneers & Laminates</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/smile-design.png"> </div>
                            <h4>Smile Designing</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/dental-implant.png"> </div>
                            <h4>Dental Implants</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/laser-teeth-whitening.png">
                            </div>
                            <h4>Laser Teeth Whitening</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/root-canal-treetment.png">
                            </div>
                            <h4>Root Canal</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/root-canal-treetment.png">
                            </div>
                            <h4>Root Canal Treatment with Laser</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/laser-dentistry.png"> </div>
                            <h4>Orthodontics & Aligners</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- why choose us -->

<div class="container">
    <div class="row text-center mt-4 mb-4">
        <div class="col-lg-3 col-md-6 col-sm-12 py-3">
            <div class="icons-land-4">
                <i class="fa-solid fa-heart-circle-check" style="color: #47b0ab;"></i>
            </div>
            <div class="counter-wrap font-weight-bold">
                <span class="counter fa-xl" data-start-number="0" data-end-number="10000" data-speed="2000">0</span>
                <span class="fa-xl">+</span>
            </div>
            <h6>SATISFIED PATIENTS</h6>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 py-3">
            <div class="icons-land-4">
                <i class="fa-solid fa-kit-medical" style="color: #47b0ab;"></i>
            </div>
            <div class="counter-wrap font-weight-bold">
                <span class="counter fa-xl" data-start-number="0" data-end-number="25" data-speed="2000">0</span>
                <span class="fa-xl">+</span>
            </div>
            <h6>HEALTH SECTIONS</h6>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 py-3">
            <div class="icons-land-4">
                <i class="fa-solid fa-file-circle-plus" style="color: #47b0ab;"></i>
            </div>
            <div class="counter-wrap font-weight-bold">
                <span class="counter fa-xl" data-start-number="0" data-end-number="100" data-speed="2000">0</span>
                <span class="fa-xl">+</span>
            </div>
            <h6>KIND OF RESEARCH</h6>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 py-3">
            <div class="icons-land-4">
                <i class="fa-solid fa-award" style="color: #47b0ab;"></i>
            </div>
            <div class="counter-wrap font-weight-bold">
                <span class="counter fa-xl" data-start-number="0" data-end-number="25" data-speed="2000">0</span>
                <span class="fa-xl">+</span>
            </div>
            <h6>AWARD WINNING</h6>
        </div>
    </div>
</div>




<!-- //request form -->
<div class="container-fluid request-call-back-form-container" style="background-color:#47b0ab;">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 col-request-call-sec-left pl-5">
            <div class="title">
                <h2 class="text-light">Get Expert Dental Advice at Your Convenience.</h2>
            </div>
            <p class="sub-title text-light">Our dental experts are here to help you with any questions or
                concerns.</p>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12 px-5">
            <div class="pt-4">
                <form action="request_callback_store" method="POST">
                    @csrf
                    <div class="form-group-rc">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name *"
                            required>
                        <input type="tel" class="form-control" id="mobile" pattern=".{10}" name="mobile"
                            placeholder="Mobile No *" required>
                        <button type="submit" class="submit-button">Request a Callback</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <section class="ftco-section" style="background-color: #f3f2f2;">
    <div class="container"> -->
        <!-- <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h1 class="fw-bold mb-4">Testimonials</h1>
                <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                    numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                    quisquam eum porro a pariatur veniam.
                </p>
            </div>
        </div>

        <div class="row text-center mb-3">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="assets/images/dummyuser.png" class="rounded-circle shadow-1-strong"
                                width="100" height="100" />
                        </div>
                        <h5 class="font-weight-bold">Teresa May</h5>
                        <p class="mb-2">
                            <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                            ad velit ab hic tenetur.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="assets/images/dummyuser.png" class="rounded-circle shadow-1-strong"
                                width="100" height="100" />
                        </div>
                        <h5 class="font-weight-bold">Maggie McLoan</h5>
                        <p class="mb-2">
                            <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                            sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                            labore laboriosam.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="assets/images/dummyuser.png" class="rounded-circle shadow-1-strong"
                                width="100" height="100" />
                        </div>
                        <h5 class="font-weight-bold">Alexa Horwitz</h5>
                        <p class="mb-2">
                            <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                            nulla .
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="testimonials-clean"style="background-image: linear-gradient(131deg, #f0f0f0 33.33%, #f8f7fa 33.33%, #f8f7fa 50%, #f0f0f0 50%, #f0f0f0 83.33%, #f8f7fa 83.33%, #f8f7fa 100%); background-size: 7.95px 9.15px;">
        <div class="container">
            <div class="intro">
                <h1 class="text-center mt-3 mb-4">Testimonials</h1>
                 <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div> 
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="{{asset('assets/images/dummyuser.png')}}">
                        <h5 class="name">Ben Johnson</h5>
                        <p class="title">CEO of Company Inc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="{{asset('assets/images/dummyuser.png')}}">
                        <h5 class="name">Carl Kent</h5>
                        <p class="title">Founder of Style Co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="{{asset('assets/images/dummyuser.png')}}">
                        <h5 class="name">Emily Clark</h5>
                        <p class="title">Owner of Creative Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="video-section p-5 row text-center m-0">
    @foreach ($video as $item)
    <div class="col-12 col-xl-12 col-sm-12 col-md-6 col-lg-4 my-2">
        <iframe width="400" height="250" src="{{url('https://www.youtube.com/embed/'.$item->video)}}"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
    @endforeach

</section>
@endsection