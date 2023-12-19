@extends('layouts.includes.main')


@section('content')
    

    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="assets/images/slider-img-1.webp"
                    style="height:400px;object-fit:cover;" class="d-block w-100 banner_image" alt="..." data-stellar-background-ratio="0.5">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="assets/images/slider-img-2.webp"
                    style="height:400px;object-fit:cover;" class="d-block w-100 banner_image" alt="..." data-stellar-background-ratio="0.5">
            </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- why choose us -->

    <div class="container">

        <div class="card mb-3 shadow-lg wow fadeInLeft" data-wow-delay="1.0s">
            <div class="row g-0">
                <div class="col-md-7 p-2">
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





        <div class="card mb-3 mt-5 shadow-lg wow fadeInRight" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-5 d-flex align-items-center justify-content-center">
                    <img src="assets/images/dept-4.jpg" class="img-fluid rounded-start" alt="Our Team"
                        style="max-width: 100%; height: -webkit-fill-available;">
                </div>

                <div class="col-md-7 p-2">
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
    </div>


<!--   <div class="card-img" style="background-image: url(assets/images/bg-card.jpg);background-repeat: no-repeat; background-position:100% -30%; " >-->
<!--     <div class="card-img2" style="background-image: url(assets/images/clean.png);background-repeat: no-repeat;background-position: 95%  90%; background-size: 100px 100px;">-->
<!--    <section class="ftco-section ftco-services">-->
<!--        <div class="shadow bg-light pb-5 mr-md-5 ml-md-5 m-auto" style="border-radius:50px;">-->
<!--            <div class="container">-->
<!--                <div class="text-center my-3">-->
<!--                    <h1>Our Clinic Services</h1>-->
<!--                </div>-->
<!--                <div class="row services-row">-->
<!--                    <div class=" col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/orofacial-pain.png"> </div>-->
<!--                                <h4>Orofacial Pain</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/migrane-tmj.png"> </div>-->
<!--                                <h4>Migraine & TMJ</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/tmd.png"> </div>-->
<!--                                <h4>TMD</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/dental-sleep-medicine.png">-->
<!--                                </div>-->
<!--                                <h4>Dental Sleep Medicine</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/tmd.png"> </div>-->
<!--                                <h4>Headaches</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/dental-sleep-medicine.png">-->
<!--                                </div>-->
<!--                                <h4>Dental Surgeries with laser</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/laser-dentistry.png"> </div>-->
<!--                                <h4>Child Care Dentistry</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/full-mouth-rehabilation.png">-->
<!--                                </div>-->
<!--                                <h4>Full Mouth Rehabilation</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/veneers-laminates.png"> </div>-->
<!--                                <h4>Veneers & Laminates</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/smile-design.png"> </div>-->
<!--                                <h4>Smile Designing</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/dental-implant.png"> </div>-->
<!--                                <h4>Dental Implants</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/laser-teeth-whitening.png">-->
<!--                                </div>-->
<!--                                <h4>Laser Teeth Whitening</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/root-canal-treetment.png">-->
<!--                                </div>-->
<!--                                <h4>Root Canal</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/root-canal-treetment.png">-->
<!--                                </div>-->
<!--                                <h4>Root Canal Treatment with Laser</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeOutUp">-->
<!--                        <div class="our-services-box">-->
<!--                            <div class="our-services speedup">-->
<!--                                <div class="icon shake-slow"> <img src="assets/images/services-img/laser-dentistry.png"> </div>-->
<!--                                <h4>Orthodontics & Aligners</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--</div>-->
<!--</div>-->


<style>
.service-card-img {
   background-attachment: fixed;
}
.our-services-box {
    transition: filter 0.3s ease-in-out;
}
.service-card-img {
    transition: transform 0.3s ease-in-out;
}

.service-card-img:hover {
    transform: scale(1.05);
}

    </style>
<div class="service-card-img" style="background: linear-gradient(  rgba(0, 0, 0, 0.1) , rgba(0, 0, 0, 0.3)), url(assets/images/bg-card.jpg);
background-repeat: no-repeat;
background-position: 100% -30%;">

    <section class="ftco-section ftco-services"> 
        <div class="pb-5 mr-md-5 ml-md-5 m-auto" style="border-radius:50px;">
            <div class="container">
                <div class="text-center my-3">
                    <h1>Our Clinic Services</h1>
                </div>
                <div class="row services-row">
                    <div class=" col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/orofacial-pain.png"> </div>
                                <h4>Orofacial Pain</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/migrane-tmj.png"> </div>
                                <h4>Migraine & TMJ</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/tmd.png"> </div>
                                <h4>TMD</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/dental-sleep-medicine.png">
                                </div>
                                <h4>Dental Sleep Medicine</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/tmd.png"> </div>
                                <h4>Headaches</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/dental-sleep-medicine.png">
                                </div>
                                <h4>Dental Surgeries with laser</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/laser-dentistry.png"> </div>
                                <h4>Child Care Dentistry</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/full-mouth-rehabilation.png">
                                </div>
                                <h4>Full Mouth Rehabilation</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/veneers-laminates.png"> </div>
                                <h4>Veneers & Laminates</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/smile-design.png"> </div>
                                <h4>Smile Designing</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/dental-implant.png"> </div>
                                <h4>Dental Implants</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/laser-teeth-whitening.png">
                                </div>
                                <h4>Laser Teeth Whitening</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/root-canal-treetment.png">
                                </div>
                                <h4>Root Canal</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/root-canal-treetment.png">
                                </div>
                                <h4>Root Canal Treatment with Laser</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 py-3 wow fadeInUp">
                        <div class="our-services-box">
                            <div class="our-services speedup">
                                <div class="icon shake-slow"> <img src="assets/images/services-img/laser-dentistry.png"> </div>
                                <h4>Orthodontics & Aligners</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>








    <!-- why choose us -->

    <div class="container">
        <div class="d-flex flex-wrap flex-wrap-counter justify-content-center align-items-center text-center mt-4 mb-4">
    
            <div class="py-3 flex-fill">
                <div class="icons-land-4">
                    <i class="fa-solid font-counter fa-heart-circle-check" style="color: #47b0ab;"></i>
                </div>
                <div class="counter-wrap font-weight-bold">
                    <span class="countersec counter fa-xlsec" data-start-number="0" data-end-number="10000" data-speed="2000">0</span>
                    <span class="fa-xlsec">+</span>
                </div>
                <h6 class="countingsec">SATISFIED PATIENTS</h6>
            </div>
    
            <div class="py-3 flex-fill">
                <div class="icons-land-4">
                    <i class="fa-solid font-counter fa-kit-medical" style="color: #47b0ab;"></i>
                </div>
                <div class="counter-wrap font-weight-bold">
                    <span class="countersec counter fa-xlsec" data-start-number="0" data-end-number="25" data-speed="10000">0</span>
                    <span class="fa-xlsec">+</span>
                </div>
                <h6 class="countingsec">HEALTH SECTIONS</h6>
            </div>
    
            <div class="py-3 flex-fill">
                <div class="icons-land-4">
                    <i class="fa-solid font-counter fa-file-circle-plus" style="color: #47b0ab;"></i>
                </div>
                <div class="counter-wrap font-weight-bold">
                    <span class="countersec counter fa-xlsec" data-start-number="0" data-end-number="100" data-speed="10000">0</span>
                    <span class="fa-xlsec">+</span>
                </div>
                <h6  class="countingsec">KIND OF RESEARCH</h6>
            </div>
    
            <div class="py-3 flex-fill">
                <div class="icons-land-4">
                    <i class="fa-solid font-counter fa-award" style="color: #47b0ab;"></i>
                </div>
                <div class="counter-wrap font-weight-bold">
                    <span class="countersec counter fa-xlsec" data-start-number="0" data-end-number="25" data-speed="10000">0</span>
                    <span class="fa-xlsec">+</span>
                </div>
                <h6 class="countingsec">AWARD WINNING</h6>
            </div>
    
        </div>
    </div>


    <!-- //request form -->
    <div class="container-fluid request-call-back-form-container" style="background-color:#47b0ab;">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-request-call-sec-left pl-5">
                <div class="title">
                    <h2 class="text-light">Get Expert Dental Advice at Your Convenience.</h2>
                </div>
                <p class="sub-title text-light">Our dental experts are here to help you with any questions or
                    concerns.</p>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-6  col-sm-12 px-5">
                <div class="pt-4">
                    <form action="request_callback_store" method="POST">
                        @csrf
                        <div class="form-group-rc">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Your Name *" required>
                            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile No *" required onwheel="disableNumberInputScroll(event)"
                           oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);">
                            <button type="submit" class="submit-button">Request a Callback</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h1 class="text-center mt-3 mb-4">Testimonials</h1>
                <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo ligula.
                    Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row people">
                @foreach ($comment as $item)
                <div class="col-md-6 col-lg-4 col-xl-4 item">
                    <div class="box">
                        <p class="description">{{$item->comment}}</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="{{ asset('assets/images/dummyuser.png') }}">
                        <h5 class="name">{{$item->name}}</h5>
                    </div>
                </div>
                @endforeach
               
                
            </div>
        </div>
    </div> --}}


    <style>
    
        .testimonials-clean {
           background-image: url('assets/images/testimonial1.jpg'); 
           background-attachment: fixed;
           background-size: cover;
           color: #ffffff; 
           padding: 20px 0; 
       }
       
       /* .testimonials-clean .intro {
           margin-bottom: 40px;
       } */
       
       /* .testimonials-clean .intro h1 {
           font-size: 36px;
           font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
       } */
       
       /* .testimonials-clean .intro p {
           margin-bottom: 0;
           backdrop-filter: blur(79px);
       } */
       
       /* .testimonials-clean .people {
           display: flex;
           flex-wrap: wrap;
           justify-content: center;
           padding: 30px 0 20px;
       } */
       
       /* .testimonials-clean .box {
           background-color: rgba(255, 255, 255, 0.7); 
           padding: 10px;
           border-radius: 10px;
       } */
       
       /* .testimonials-clean .item .name {
           font-weight: bold;
           margin-bottom: 2px;
           color: #6f6b6b;
       
       }
       
       .testimonials-clean .item .author {
           margin-top: 28px;
           padding-left: 25px;
           backdrop-filter: blur(10px);
           padding-top: 10px;
           padding-bottom:10px;
       } */
       </style>
       
       <div class="testimonials-clean">
               <div class="container">
                   <div class="intro">
                       <h1 class="text-center fw-bold mt-3 mb-4">Testimonials</h1>
                       <p class="text-center text-dark">Our customers love us! Read what they have to say below. Aliquam sed justo ligula.
                           Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
                   </div>
                   <div class="row people">
                       @foreach ($comment as $item)
                       <div class="col-md-6 col-lg-4 col-xl-4 item">
                           <div class="box">
                               <p class="description text-dark">{{$item->comment}}</p>
                           </div>
                           <div class="author"><img class="rounded-circle" src="{{ asset('assets/images/dummyuser.png') }}">
                               <h5 class="name">{{$item->name}}</h5>
                           </div>
                       </div>
                       @endforeach
                   </div>
               </div>
           </div>






    <section class="video-section p-5 row text-center m-0">
        @foreach ($video as $item)
            <div class="col-12 col-xl-4 col-sm-12 col-md-6 col-lg-4 my-2">
                <iframe width="400" height="250" src="{{ url('https://www.youtube.com/embed/' . $item->video) }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        @endforeach

    </section>
@endsection
