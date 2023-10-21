@extends('layouts.includes.main')


@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(assets/images/slider-img-1.webp);"
            data-stellar-background-ratio="0.5">
            <!-- <div class="overlay"></div> -->
        </div>
        <div class="slider-item" style="background-image:url(assets/images/slider-img-2.webp);"
            data-stellar-background-ratio="0.5">
            <!-- <div class="overlay"></div> -->
        </div>
    </section>



    <!-- why choose us -->

    <div class="container">
        <div class="card mb-3 shadow-lg animated fadeInLeft ">
            <div class="row g-0">
                <div class="col-md-7">
                    <div class="card-body what-who-sec">
                        <div class="text-center mb-4">
                            <h5 class="card-title" style="font-size: 32px; font-weight: 700;">What We Are?</h5>
                        </div>
                        <div class="pl-md-5 ml-md-5 mb-5">
                            <p>At the core of our mission is a profound dedication to improving lives and fostering
                                healthier
                                communities. Dr. Sarrah Husain is not only a skilled dental practitioner but also a
                                compassionate advocate for those who suffer from debilitating conditions. Here's a
                                glimpse
                                of who we are and what we stand for:
                            </p>
                            <a href="{{ Route('about') }}#What_we_are"><button type="button"
                                    class="btn custom-btn-what-why">
                                    Read More
                                </button></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 d-flex">
                    <img src="assets/images/image_5.jpg" class="img-fluid rounded-start" alt="Our Services" />
                </div>
            </div>
        </div>
        <div class="card mb-3 mt-5 shadow-lg animated fadeInRight">
            <div class="row g-0">
                <div class="col-md-5 d-flex">
                    <img src="assets/images/dept-4.jpg" class="img-fluid rounded-start" alt="Our Team" />
                </div>
                <div class="col-md-7">
                    <div class="card-body what-who-sec">
                        <div class="text-center mb-4">
                            <h5 class="card-title" style="font-size: 32px; font-weight: 700;">Who We Are?</h5>
                        </div>
                        <div class="pl-md-5 ml-md-5 mb-5">
                            <p>Dr. Sarrah Husain is a distinguished figure in the field of dentistry, with an
                                unwavering
                                commitment to excellence in patient care and professional growth. With 17 years of
                                dedicated practice as a conservative dentist, she has recently taken a significant
                                leap in her
                                career by pursuing a specialized Orofacial Pain Fellowship.
                            </p>
                            <a href="{{ Route('about') }}#Who_we_are"><button type="button"
                                    class="btn custom-btn-what-why">
                                    Read More
                                </button></a>

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
                    <div class=" col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/orofacial-pain.png"> </div>
                                <h4><a href="">Orofacial Pain</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/migrane-tmj.png"> </div>
                                <h4>Migraine & TMJ</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/tmd.png"> </div>
                                <h4>TMD</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
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
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/tmd.png"> </div>
                                <h4>Headaches</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/dental-sleep-medicine.png">
                                </div>
                                <h4>Dental Surgeries with laser</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/laser-dentistry.png"> </div>
                                <h4>Child Care Dentistry</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
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
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/veneers-laminates.png"> </div>
                                <h4>Veneers & Laminates</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/smile-design.png"> </div>
                                <h4>Smile Designing</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/dental-implant.png"> </div>
                                <h4>Dental Implants</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
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
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/root-canal-treetment.png">
                                </div>
                                <h4>Root Canal</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/root-canal-treetment.png">
                                </div>
                                <h4>Root Canal Treatment with Laser</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3 py-3">
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
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="icons-land-4">
                    <i class="fa-solid fa-heart-circle-check" style="color: #47b0ab;"></i>
                </div>
                <div class="counter-wrap font-weight-bold">
                    <span class="counter fa-xl" data-start-number="0" data-end-number="10000" data-speed="2000">0</span>
                    <span class="fa-xl">+</span>
                </div>
                <h6>SATISFIED PATIENTS</h6>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="icons-land-4">
                    <i class="fa-solid fa-kit-medical" style="color: #47b0ab;"></i>
                </div>
                <div class="counter-wrap font-weight-bold">
                    <span class="counter fa-xl" data-start-number="0" data-end-number="25" data-speed="2000">0</span>
                    <span class="fa-xl">+</span>
                </div>
                <h6>HEALTH SECTIONS</h6>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="icons-land-4">
                    <i class="fa-solid fa-file-circle-plus" style="color: #47b0ab;"></i>
                </div>
                <div class="counter-wrap font-weight-bold">
                    <span class="counter fa-xl" data-start-number="0" data-end-number="100" data-speed="2000">0</span>
                    <span class="fa-xl">+</span>
                </div>
                <h6>KIND OF RESEARCH</h6>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
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
    <div class="container-fluid rounded-pill" style="background-color:#47b0ab;">
        <div class="">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-request-call-sec-left pl-5">
                    <div class="title">
                        <h2 class="text-light">Get Expert Dental Advice at Your Convenience.</h2>
                    </div>
                    <p class="sub-title text-light">Our dental experts are here to help you with any questions or
                        concerns.</p>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 pr-5">
                    <div class="pl-3 pr-3 pt-4">
                        <form>
                            <div class="form-group-rc">
                                <input type="text" id="name" name="name" placeholder="Your Name *" required>
                                <input type="tel" id="phone" name="phone" placeholder="Mobile No *" required>
                                <button type="submit" class="submit-button">Request a Callback</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <section class="ftco-section" style="background-color: #f3f2f2;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h1 class="fw-bold mb-4">Testimonials</h1>
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                        numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                        quisquam eum porro a pariatur veniam.
                    </p>
                </div>
            </div>

<<<<<<< HEAD
            <div class="row services-row">
                <div class=" col-sm-12 col-md-3 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/orofacial-pain.png"> </div>
                            <h4><a href="#">Orofacial Pain</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/migrane-tmj.png"> </div>
                            <h4>Migraine & TMJ</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/tmd.png"> </div>
                            <h4>TMD</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-xl-3 py-3">
                    <div class="our-services-box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="assets/images/services-img/dental-sleep-medicine.png">
=======
            <div class="row text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                                    class="rounded-circle shadow-1-strong" width="100" height="100" />
>>>>>>> 1ad9b7907d33c3796e3a98ccd09a5cb7275cc10a
                            </div>
                            <h5 class="font-weight-bold">Teresa May</h5>
                            <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star-half-alt fa-sm text-info"></i>
                                </li>
                            </ul>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                                ad velit ab hic tenetur.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp"
                                    class="rounded-circle shadow-1-strong" width="100" height="100" />
                            </div>
                            <h5 class="font-weight-bold">Maggie McLoan</h5>
                            <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                            </ul>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                                sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                                labore laboriosam.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                                    class="rounded-circle shadow-1-strong" width="100" height="100" />
                            </div>
                            <h5 class="font-weight-bold">Alexa Horwitz</h5>
                            <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-info"></i>
                                </li>
                                <li>
                                    <i class="far fa-star fa-sm text-info"></i>
                                </li>
                            </ul>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                                nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                                vestibulum in tempus viverra turpis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video-section p-5">
        <div class="">
            <iframe width="400" height="250" src="https://www.youtube.com/embed/3LGXBY7OW6Y?si=OjG_C05BnBfROFAb"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <div class="">
            <iframe width="400" height="250" src="https://www.youtube.com/embed/3LGXBY7OW6Y?si=OjG_C05BnBfROFAb"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <div class="">
            <iframe width="400" height="250" src="https://www.youtube.com/embed/3LGXBY7OW6Y?si=OjG_C05BnBfROFAb"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

    </section>
@endsection
