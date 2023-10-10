@extends('layouts.includes.main')

@section('content')

<!-- <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg-common-img-slider.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contact Us</h1>

                </div>
            </div>
        </div>
    </section> -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/page-heading-bg.jpg');background-size: cover;"  data-stellar-background-ratio="0.5">
    <!-- <div class="overlay" ></div> -->
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread" style="color:white;"> Orofacial Pain</h1>
                </div>
            </div>
        </div>
</section>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email"required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject"required>
                        </div>
                        <div class="form-group">
                            <textarea name id cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div id=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14885.932699891773!2d79.11575369460763!3d21.1331613533537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c75b851f8e67%3A0xd5f4762b665a36ce!2sNandanvan%2C%20Nagpur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1696224597338!5m2!1sen!2sin" width="600" height="450" style="border:0;" alt="wait loading..!" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Email:</span> <a href="/cdn-cgi/l/email-protection#640d0a020b241d0b1116170d10014a070b09"><span class="__cf_email__" data-cfemail="80e9eee6efc0f9eff5f2f3e9f4e5aee3efed">[email&#160;protected]</span></a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection