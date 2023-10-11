@extends('layouts.includes.main')

@section('content')
<!-- 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg-common-img-slider.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Video's</h1>
                   
                </div>
            </div>
        </div>
    </section> -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;"  data-stellar-background-ratio="0.5">
    <div class="overlay" ></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread" style="color:white;"> Videos</h1>
                </div>
            </div>
        </div>
</section>
    


    <!-- <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
            <div class=" col-md-4 ftco-animate">
                <div class="card text-center" style="max-width:20rem; border-radius: 10px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
                    <div class=" blog-entry">
                        <video class="block-20 d-flex" controls src="assets/videos/orafacial-pain-01FPR.mp4" style="max-width:100%;margin:0 auto;">
                            Your browser does not support the video tag.
                            </video>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="{{route('orofacial_pain')}}">Orafacial Pain</a></h3>
                                <div class="d-flex align-items-center mt-4">   
                                    <p class="mb-0"><a href="{{route('orofacial_pain')}}" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff; border-radius:10px"></i></span></a></p>
                                </div>
                         </div>
                    </div>
                </div>
            </div>    
            <div class="col-md-4 ftco-animate">
                <div class="card text-center" style="max-width:20rem; border-radius: 5px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
                    <div class="blog-entry">
                        <video  class="block-20 d-flex" controls src="assets/videos/smile-designing-052SV.mp4"style="max-width:100%;margin:0 auto;">
                            Your browser does not support the video tag.
                            </video>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">Smile Designing</a></h3>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="card text-center" style="max-width:20rem; border-radius: 5px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
                    <div class="blog-entry">
                        <video class="block-20 d-flex" controls src="assets/videos/oral-surgical-procedures1.mp4" style="max-width:100%;margin:0 auto;">
                            Your browser does not support the video tag.
                            </video>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">Oral Surgical Procedure</a></h3>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="col-md-4 ftco-animate">
                <div class="card text-center" style="max-width:20rem; border-radius: 5px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
                    <div class="blog-entry">
                        <video class="block-20 d-flex" controls src="assets/videos/child-care-dentistry16.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                            </video> 
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">Child Care Dentistry</a></h3>
                           <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                        </div>
</div>
                    </div>
                </div>
            </div>        
            <div class="col-md-4 ftco-animate">
                <div class="card text-center" style="max-width:20rem; border-radius: 5px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
                    <div class="blog-entry">
                            <video class="block-20 d-flex" controls src="assets/videos/braces-ortho-290.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                            </video>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">Braces Ortho</a></h3>
                             <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                        </div>
</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="card text-center" style="max-width:20rem; border-radius: 5px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
                    <div class="blog-entry">
                            <video class="block-20 d-flex" controls src="assets/videos/table-top-dentistry02BT.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                            </video> 
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="#">Table Top Dentistry</a></h3>
                              <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                        </div>
</div>
                    </div>
                </div> 
            </div>
            <div class="row no-gutters my-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->






    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                        <video class="block-20 d-flex" controls src="assets/videos/orafacial-pain-01FPR.mp4" style="max-width:100%;margin:0 auto;">
                            Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="text pt-3 text-center">
                        <h3 class="heading"><a href="{{route('orofacial_pain')}}">Orafacial Pain</a></h3>
                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                        <!-- <span class="position mb-2">Denstist</span> -->
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <!-- <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                        <video  class="block-20 d-flex" controls src="assets/videos/smile-designing-052SV.mp4"style="max-width:100%;margin:0 auto;">
                            Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="text pt-3 text-center">
                        <h3 class="heading"><a href="#">Smile Designing</a></h3>
                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                        <!-- <span class="position mb-2">Dentist</span> -->
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <!-- <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                        <video class="block-20 d-flex" controls src="assets/videos/oral-surgical-procedures1.mp4" style="max-width:100%;margin:0 auto;">
                            Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="text pt-3 text-center">
                        <h3 class="heading"><a href="#">Oral Surgical Procedure</a></h3>
                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p><!-- <span class="position mb-2">Dentist</span> -->
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <!-- <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                        <video class="block-20 d-flex" controls src="assets/videos/child-care-dentistry16.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                            </video> 
                        </div>
                        <div class="text pt-3 text-center">
                        <h3 class="heading"><a href="#">Child Care Dentistry</a></h3>
                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                            <!-- <span class="position mb-2">Dentist</span> -->
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <!-- <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                        <video class="block-20 d-flex" controls src="assets/videos/braces-ortho-290.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="text pt-3 text-center">
                        <h3 class="heading"><a href="#">Braces Ortho</a></h3>
                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                            <!-- <span class="position mb-2">Denstist</span> -->
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <!-- <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                        <video class="block-20 d-flex" controls src="assets/videos/table-top-dentistry02BT.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                            </video> 
                        </div>
                        <div class="text pt-3 text-center">
                        <h3 class="heading"><a href="#">Table Top Dentistry</a></h3>
                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                            <!-- <span class="position mb-2">Dentist</span> -->
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                <!-- <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                        <video class="block-20 d-flex" controls src="assets/videos/veneer-laminate01f.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3 class="heading"><a href="#">Veneer Laminate</a></h3>
                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                            <div class="faded">
                                <!-- <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                        <video class="block-20 d-flex" controls src="assets/videos/perio-gum-bleeding-o-kit27.mp4" style="max-width:100%;margin:0 auto;">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="text pt-3 text-center">
                        <h3 class="heading"><a href="#">Perio Gum Bleeding</a></h3>
                        <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></span></a></p>
                            <div class="faded">
                                <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters my-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-angle-left" style="color: #29eab;"></i></a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa-solid fa-angle-right" style="color: #29eab;"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
    

    