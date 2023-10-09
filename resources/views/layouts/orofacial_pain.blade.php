@extends('layouts.includes.main')

@section('content')



<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/orofacial-pain-bg.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Orofacial Pain</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('orofacial_pain')}}">Home <i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></a></span> <span>Treatment  <i class="fa-solid fa-angle-right" style="color: #ffffff;"></i><span> Orofacial Pain</span></span></p>
                </div>
            </div>
        </div>
</section>
<!-- <section>
    <div class="container">
        <h2 class="orofacial_pain-h2-shadow">What is Orofacial Pain?</h2>
        <p>Orofacial pain refers to any discomfort or pain experienced in the mouth, jaw, face, or head region. It can be caused by various factors such as dental conditions, temporomandibular joint (TMJ) disorders, or even underlying medical conditions.
             Understanding the underlying cause is crucial for effective diagnosis and treatment.
        </p>  
        
        <h2 class="orofacial_pain-h2-shadow">Why is Orofacial Pain Important?</h2>
        <p>Orofacial pain can significantly impact an individual's overall well-being, affecting their ability to speak, eat, and perform daily activities comfortably. Seeking professional evaluation and treatment for orofacial pain is crucial to alleviate discomfort, improve quality of life,
             and address any underlying dental or medical conditions contributing to the pain.
        </p>
        
        <h2 class="orofacial_pain-h2-shadow">How is orofacial pain diagnosed?</h2>
        <p>Orofacial pain diagnosis involves a comprehensive evaluation, including a thorough medical and dental history, physical examination, and possibly imaging tests. Identifying the underlying cause, such as dental infections, TMJ disorders, or nerve-related issues, enables the development of a personalized 
            treatment plan for effective pain management.
        </p>

        <h2 class="orofacial_pain-h2-shadow">When should I seek evaluation for orofacial pain?</h2>
        <p>If you experience persistent or recurring orofacial pain, it's important to schedule an evaluation with a dental professional who specializes in orofacial pain management. Early intervention can help diagnose the underlying cause and provide timely treatment to alleviate discomfort
             and prevent potential complications.
        </p>

        <h2 class="orofacial_pain-h2-shadow">Myth: Orofacial pain is a normal part of aging.</h2>
        <p>Busted: While some age-related changes may contribute to orofacial pain, it is not a normal part of the aging process. Orofacial pain can indicate underlying dental or medical conditions that require evaluation and treatment. Ignoring or accepting orofacial pain as a natural consequence of aging may lead to 
            unnecessary discomfort and potential complications.
        </p>

        <h2 class="orofacial_pain-h2-shadow">Myth: Orofacial pain will go away on its own.</h2>
        <p>Busted: Orofacial pain should not be ignored, as it rarely resolves on its own without intervention. If you experience persistent or recurring orofacial pain, it's important to seek professional evaluation and treatment to address the underlying cause and alleviate 
            discomfort for improved quality of life.
        </p>


    </div>
</section> -->

<section>
   <ul id="accordion">
       <li class="accordion-box">
            <label for="first"><h4>What is Orofacial Pain?</h4><span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="first" checked>
            <div class="content">
                <p>Orofacial pain refers to any discomfort or pain experienced in the mouth, jaw, face, or head region. It can be caused by various factors such as dental conditions, temporomandibular joint (TMJ) disorders, or even underlying medical conditions.
                    Understanding the underlying cause is crucial for effective diagnosis and treatment.
                 </p> 
            </div>
        </li>
        <li class="accordion-box">
            <label for="second"><h4>Why is Orofacial Pain Important?</h4><span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="second">
            <div class="content">
                <p>Orofacial pain can significantly impact an individual's overall well-being, affecting their ability to speak, eat, and perform daily activities comfortably. Seeking professional evaluation and treatment for orofacial pain is crucial to alleviate discomfort, improve quality of life,
                   and address any underlying dental or medical conditions contributing to the pain.
                </p> 
            </div>
        </li>
        <li class="accordion-box">
            <label for="third"><h4>How is orofacial pain diagnosed?</h4><span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="third">
            <div class="content">
                <p>Orofacial pain diagnosis involves a comprehensive evaluation, including a thorough medical and dental history, physical examination, and possibly imaging tests. Identifying the underlying cause, such as dental infections, TMJ disorders, or nerve-related issues, enables the development of a personalized 
                   treatment plan for effective pain management.
                </p> 
            </div>
        </li>

        <li class="accordion-box">
            <label for="fourth"><h4>When should I seek evaluation for orofacial pain?</h4><span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="fourth">
            <div class="content">
                <p>If you experience persistent or recurring orofacial pain, it's important to schedule an evaluation with a dental professional who specializes in orofacial pain management. Early intervention can help diagnose the underlying cause and provide timely treatment to alleviate discomfort
                   and prevent potential complications.
                </p> 
            </div>
        </li>

        <li class="accordion-box">
            <label for="fifth"><h4>Orofacial pain is a normal part of aging.</h4><span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="fifth">
            <div class="content">
                <p>Busted: While some age-related changes may contribute to orofacial pain, it is not a normal part of the aging process. Orofacial pain can indicate underlying dental or medical conditions that require evaluation and treatment. Ignoring or accepting orofacial pain as a natural consequence of aging may lead to 
                   unnecessary discomfort and potential complications.
                </p> 
            </div>
        </li>

        <li class="accordion-box">
            <label for="sixth"><h4>Orofacial pain will go away on its own.</h4><span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="sixth">
            <div class="content">
                <p>Busted: Orofacial pain should not be ignored, as it rarely resolves on its own without intervention. If you experience persistent or recurring orofacial pain, it's important to seek professional evaluation and treatment to address the underlying cause and alleviate 
            discomfort for improved quality of life.
                </p> 
            </div>
        </li>
    </ul>
<section>
 @endsection
 

