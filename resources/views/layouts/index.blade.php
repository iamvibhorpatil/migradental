@extends('layouts.includes.main')


@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(assets/images/slider-img-1.jpg);"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <!-- <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                     catchy lines 
                </div>
            </div> -->
        </div>
        <div class="slider-item" style="background-image:url(assets/images/slider-img2.jpg);">
            <div class="overlay"></div>
            <!-- <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    catchy lines 
                </div>
            </div> -->
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb pt-4">
        <div class="container">
            <div class="card mb-3 shadow-lg animated fadeInLeft ">
                <div class="row g-0">
                    <div class="col-md-7">
                        <div class="card-body what-who-sec">
                            <div class="text-center mb-4">
                                <h5 class="card-title" style="font-size: 32px; font-weight: 700;">What We Are?</h5>
                            </div>
                            <div class="pl-md-5 ml-md-5 mb-5">
                                <p>At the core of our mission is a profound dedication to improving lives and fostering healthier
                                    communities. Dr. Sarrah Husain is not only a skilled dental practitioner but also a
                                    compassionate advocate for those who suffer from debilitating conditions. Here's a glimpse
                                    of who we are and what we stand for:
                                </p>
                                <!-- <p>We are committed to providing top-notch dental care and improving your oral health.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <img src="assets/images/image_5.jpg" class="img-fluid rounded-start" alt="Our Services" />
                    </div>
                </div>
            </div>
            <div class="card mb-3 mt-5 shadow-lg animated fadeInRight">
                <div class="row g-0">
                    <div class="col-md-5 d-flex align-items-center">
                        <img src="assets/images/dept-4.jpg" class="img-fluid rounded-start" alt="Our Team" />
                    </div>
                    <div class="col-md-7">
                        <div class="card-body what-who-sec">
                            <div class="text-center mb-4">
                                <h5 class="card-title" style="font-size: 32px; font-weight: 700;">Who We Are?</h5>
                            </div>
                            <div class="pl-md-5 ml-md-5 mb-5">
                                <p>Dr. Sarrah Husain is a distinguished figure in the field of dentistry, with an unwavering
                                    commitment to excellence in patient care and professional growth. With 17 years of
                                    dedicated practice as a conservative dentist, she has recently taken a significant leap in her
                                    career by pursuing a specialized Orofacial Pain Fellowship.
                                </p>
                                <!-- <p>Education and Specialization:
                                    Dr. Sarrah Husain has dedicated herself to advancing her expertise and knowledge in the fiel
                                    d of dentistry. Her recent accomplishment includes completing an Orofacial Pain Fellowship,
                                    Temporomandibular Disorder, and Dental Sleep Medicine program at Roseman University,
                                    Smile-USA. This prestigious program has equipped her with the skills and insights necessary
                                    to address complex orofacial pain and sleep-related dental issues.
                                    A Pioneer in Nagpur and India:
                                    Dr. Husain's achievement is a source of immense pride and accomplishment for the dental
                                    community in Nagpur, as she stands as the first professional in the region to pursue this
                                    super-specialization. Her trailblazing efforts have also positioned her among the select few in
                                    India who have taken this advanced route in the field of Orofacial Pain and Dental Sleep
                                    Medicine</p> -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="card mr-5 ml-5" style="border-radius:50px;">
            <div class="container">
                <div class="text-center mt-3">
                    <h1>Our Clinic Services</h1>
                </div>

                <div class="row services-row">
                    <div class=" col-sm-12 col-md-3 col-xl-3 py-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/orofacial-pain.png"> </div>
                                <h4><a href="{{ route('orofacial_pain') }}">Orofacial Pain</a></h4>
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
                    <div class="col-sm-12 col-md-3 col-xl-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/veneers-laminates.png"> </div>
                                <h4>Veneers & Laminates</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/smile-design.png"> </div>
                                <h4>Smile Designing</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="assets/images/services-img/dental-implant.png"> </div>
                                <h4>Dental Implants</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-xl-3">
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


    <div class="container-fluid" style="background-color:#47b0ab;">
        <div class="row">
            <div class="col-md-7 col-lg-7 col-sm-12 col-request-call-sec-left pl-5">
                <div class="title">
                    <h2 class="text-light">Get Expert Dental Advice at Your Convenience.</h2>
                </div>
                <p class="sub-title text-light">Our dental experts are here to help you with any questions or concerns.</p>
            </div>
            <div class="col-md-5 col-lg-5 col-sm-12 pr-5">
                <div class=" pl-3 pr-3 pt-4 ">
                    <form>
                        <div class="form-group-rc d-flex">
                            <input type="text" id="name" name="name" class="half-width" placeholder="Your Name *" required>

                            <input type="tel" id="phone" name="phone" class="half-width" placeholder="Mobile No *" required>
                        </div>
                            <div class="form-group-rc">
                                <input type="email" id="email" name="email" class="full-width" placeholder="Email *" required>
                            </div>
                            <div class="form-group-rc">
                                <textarea id="message" name="message" class="full-width" placeholder="Brief Description of Dental Concern." required></textarea>
                            </div>
                            <div class="form-group-rc">
                                <button type="submit" class="submit-button">Request a Callback</button>
                            </div>
                        </form>   
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

            <div class="row text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                                    class="rounded-circle shadow-1-strong" width="100" height="100" />
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
