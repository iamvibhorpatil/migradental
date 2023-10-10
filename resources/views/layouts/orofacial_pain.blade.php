@extends('layouts.includes.main')

@section('content')



<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/page-heading-bg.jpg');background-size: cover;background-position: center;"  data-stellar-background-ratio="0.5">
    <!-- <div class="overlay" ></div> -->
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread" style="color:white;"> Orofacial Pain</h1>
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
                            What is Orofacial Pain?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                            Orofacial pain refers to any discomfort or pain experienced in the mouth, jaw, face, or head region. It can be caused by various factors such as dental conditions, temporomandibular joint (TMJ) disorders, or even underlying medical conditions.
                                            Understanding the underlying cause is crucial for effective diagnosis and treatment.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseTwo">
                            Why is Orofacial Pain Important?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Orofacial pain can significantly impact an individual's overall well-being, affecting their ability to speak, eat, and perform daily activities comfortably. Seeking professional evaluation and treatment for orofacial pain is crucial to alleviate discomfort, improve quality of life,
                                        and address any underlying dental or medical conditions contributing to the pain.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseThree">
                            How is orofacial pain diagnosed?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Orofacial pain diagnosis involves a comprehensive evaluation, including a thorough medical and dental history, physical examination, and possibly imaging tests. Identifying the underlying cause, such as dental infections, TMJ disorders, or nerve-related issues, enables the development of a personalized 
                                        treatment plan for effective pain management.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseFour">
                            When should I seek evaluation for orofacial pain?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            If you experience persistent or recurring orofacial pain, it's important to schedule an evaluation with a dental professional who specializes in orofacial pain management. Early intervention can help diagnose the underlying cause and provide timely treatment to alleviate discomfort
                        and prevent potential complications.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseFive">
                            Orofacial pain is a normal part of aging.
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Busted: While some age-related changes may contribute to orofacial pain, it is not a normal part of the aging process. Orofacial pain can indicate underlying dental or medical conditions that require evaluation and treatment. Ignoring or accepting orofacial pain as a natural consequence of aging may lead to 
                            unnecessary discomfort and potential complications.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link accordion-title" data-toggle="collapse" href="#collapseSix">
                            Orofacial pain will go away on its own.
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Busted: Orofacial pain should not be ignored, as it rarely resolves on its own without intervention. If you experience persistent or recurring orofacial pain, it's important to seek professional evaluation and treatment to address the underlying cause and alleviate 
                        discomfort for improved quality of life.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
<section>

 @endsection
 

