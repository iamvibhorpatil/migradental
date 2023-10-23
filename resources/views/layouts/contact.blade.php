@extends('layouts.includes.main')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h2 class="mb-2 bread font-weight-normal"> Contact Us</h2>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-7 p-4 p-md-4 bg-light">
                    <form action="#">
                        <div class="d-flex form-group justify-content-between">
                            <div class="pr-3 w-50">
                                <label for="name" class="font-weight-normal text-uppercase">Full Name</label>
                                <input type="text" class="form-control" placeholder="Name" required="">
                            </div>
                            <div class="pr-3 w-50">
                                <label for="number" class="font-weight-normal text-uppercase">Mobile No.</label>
                                <input type="tel" class="form-control" placeholder="Mobile No." required="">
                            </div>
                        </div>
                        <div class="d-flex form-group justify-content-between">
                            <div class="pr-3 w-50">
                                <label for="number" class="font-weight-normal text-uppercase">Whastaap No.</label>
                                <input type="tel" class="form-control" placeholder="Whastaap No." required="">
                            </div>
                            <div class="pr-3 w-50">
                                <label for="subject" class="font-weight-normal text-uppercase">Subject</label>
                                <input type="text" class="form-control" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="form-group pr-3">
                            <label for="message" class="font-weight-normal text-uppercase">Message</label>
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-5 d-flex align-items-stretch">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.55550850929333!2d79.10666979137251!3d21.156849611477455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0cd9e822dc9%3A0x9629aed98fbc52e!2sManorama%20Tower!5e0!3m2!1sen!2sin!4v1697445535202!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;"  loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 mt-3 contact-info">
              
                <div class="col-md-3 text-center">
                    <i class="bg-info fa-solid fa-location-dot p-3 rounded-circle text-white"></i>
                    <div class="align-self-stretch box d-flex p-4">
                        <p><span class="">Migradent, 3rd Floor Manorama Towers, Opp Bharat Mata Chowk, Itwari, NAGPUR 440002</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bg-info fa-solid fa-phone p-3 rounded-circle text-white"></i>
                    <div class="align-self-stretch box d-flex p-4 justify-content-center">
                        <p  class="font-weight-bold pr-1">7030468548
                            <img src="{{asset('assets/images/qr.svg')}}" class="w-50 mx-auto d-block" alt="">
                        </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bg-info fa-solid fa-envelope p-3 rounded-circle text-white"></i>
                    <div class="align-self-stretch box d-flex p-4 justify-content-center">
                        <p><span class=" pr-1">migradent.info@gmail.com</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bg-info fa-solid fa-globe p-3 rounded-circle text-white"></i>
                    <div class="align-self-stretch box d-flex p-4 justify-content-center">
                        <p><span class="pr-1">migradent.com</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
