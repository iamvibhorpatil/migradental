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
    
    <!-- <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="card mb-3" style="box-shadow:0 7px 30px -10px rgba(150,170,180,0.5);">
                <div class="row g-0">
                    <div class="col-md-7">
                            <div class="card-body">
                                <div class="pl-md-5 ml-md-5">
                                    <h5 class="card-title"style="font-size: 32px;font-weight: 700;">What We Are?</h5>
                                </div>    
                                <div class="pl-md-5 ml-md-5 mb-5"style="font-weight:600;">
                                    <p>Welcome to Migradent! We are your trusted source for all things related to migration.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit delectus, quisquam dolore beatae quod soluta cupiditate, eum facere quidem odit quia illum repudiandae quos id!</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-5 align-self-center">
                            <img src="assets/images/image_5.jpg" class="img-fluid rounded-start" alt="img">
                    </div>
                </div>
            </div>
            <div class="card mb-3 mt-5" style="box-shadow:0 7px 30px -10px rgba(150,170,180,0.5);">
               <div class="row g-0">
                    <div class="col-md-5 align-self-center">
                         <img src="assets/images/dept-4.jpg" class="img-fluid rounded-start" alt="img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="pl-md-5 ml-md-5">
                                <h5 class="card-title"style="font-size: 32px;font-weight: 700;">Who We Are?</h5>
                            </div>    
                            <div class="pl-md-5 ml-md-5 mb-5"style="font-weight:600;">
                                <p>Welcome to Migradent! We are your trusted source for all things related to migration.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit delectus, quisquam dolore beatae quod soluta cupiditate, eum facere quidem odit quia illum repudiandae quos id!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="card mb-3 shadow-lg">
            <div class="row g-0">
                <div class="col-md-7">
                    <div class="card-body what-who-sec">
                        <div class="text-center mb-4">
                            <h5 class="card-title" style="font-size: 32px; font-weight: 700;">What We Are?</h5>
                        </div>
                        <div class="pl-md-5 ml-md-5 mb-5">
                            <p>Welcome to Migradent! We are your trusted source for all things related to dental health.</p>
                            <p>We are committed to providing top-notch dental care and improving your oral health.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <img src="assets/images/image_5.jpg" class="img-fluid rounded-start" alt="Our Services" />
                </div>
            </div>
        </div>
        <div class="card mb-3 mt-5 shadow-lg">
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
                            <p>Welcome to Migradent! We are your trusted source for all things related to dental health.</p>
                            <p>Our team of experienced professionals is dedicated to your oral well-being.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- <section class="ftco-section ftco-services">   
    <div class="container">
        <div class="text-center mt-3">
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
    </section>   -->



    <section class="ftco-section ftco-services">
    <div class="container">
        <div class="text-center mt-3">
            <h1>Our Clinic Services</h1>
        </div>
        <div class="row services-row">
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
    
     <section class="ftco-section mt-3" style="background-color: #f3f2f2;">
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
    <section class="video-section">
    <div class="video-column">
        <video controls poster="placeholder-image.jpg">
            <source src="video1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="video-column">
        <video controls poster="placeholder-image.jpg">
            <source src="video2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="video-column">
        <video controls poster="placeholder-image.jpg">
            <source src="video3.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>
<style>/* Add CSS for the video section */
.video-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.video-column {
    flex: 1;
    margin: 10px;
    overflow: hidden;
    position: relative;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease-in-out;
}

.video-column:hover {
    transform: scale(1.05); /* Add hover effect (increase size on hover) */
}

video {
    width: 100%;
    height: auto;
    display: block;
}

video:hover {
    filter: brightness(90%); /* Add hover effect (adjust brightness on hover) */
}

    </style>

@endsection