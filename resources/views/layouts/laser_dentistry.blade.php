@extends('layouts.includes.main')

@section('content')



<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;background-position: center;"  data-stellar-background-ratio="0.5">
    <div class="overlay" ></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h2 class="mb-2 bread font-weight-normal" style="color:white;">Laser Dentistry</h2>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="container container-treatment">
        <div class="left-side-treatment">
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
        <div class="right-side-treatment">
            <div class="right-side-content-treatment">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link accordion-title" data-toggle="collapse" href="#collapseOne">
                            What is laser dentistry?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                            Laser dentistry involves the use of advanced laser technology to perform a wide range of dental treatments with enhanced precision and efficiency.
                             It minimizes discomfort, reduces healing time, and often eliminates the need for anesthesia. Laser dentistry is versatile and can be used for various procedures,
                              including cavity treatment, gum surgeries, and teeth whitening.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseTwo">
                            Why is laser dentistry beneficial?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Laser dentistry offers numerous benefits, such as minimized discomfort during treatments, reduced healing time, precise and conservative procedure
                            s, and often, less need for anesthesia. It also allows for efficient and effective treatment outcomes, enhancing patient comfort and satisfaction with dental care.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseThree">
                            How is laser dentistry implemented?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Laser dentistry involves using specific dental laser systems to perform various procedures. The laser energy is delivered precisely to the targeted area, allowing for the removal of diseased tissue, cavity preparation, gum reshaping, or other necessary dental interventions. The process is often quick, comfortable, and requires minimal recovery time.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseFour">
                            When is laser dentistry used in dental treatments?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Laser dentistry can be used in various dental treatments, including cavity removal, gum disease treatment, gum reshaping, teeth whitening, and even oral surgeries. The specific application depends on the patient's dental needs, and the dentist will determine the most suitable use of laser technology for optimal treatment outcomes.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseFive">
                            Myth: Laser treatments in dentistry are unsafe.
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Busted: Laser dentistry is a safe and well-established technique in modern dentistry. Dental lasers are designed to be highly precise, and dentists receive specialized training to ensure safe and effective use. When performed by a trained professional, laser treatments in dentistry offer excellent results with minimal risks and complications.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseSix">
                            Why Choose Us (Dr. Sarrah at MIGRADENT)
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Dr. Sarrah Husain at MIGRADENT utilizes advanced laser technology to provide efficient, comfortable, and precise dental treatments. With extensive experience in laser dentistry, she ensures that patients receive exceptional care, benefiting from minimally invasive procedures, reduced healing time, and superior treatment outcomes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section>

 @endsection
 

