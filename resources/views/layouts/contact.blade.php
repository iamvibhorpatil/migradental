@extends('layouts.includes.main')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 text-center wow bounceInUp" data-wow-delay="1.3s">
                    <h2 class="mb-2 bread font-weight-normal"> Contact Us</h2>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-7 p-md-4 bg-light wow fadeInLeft" data-wow-delay="1.5s">
                    <form action="store_contact" method="POST">
                        @csrf
                        @if (session('contact_success'))
                            <script>
                                Swal.fire({
                                    title: 'Submited!',
                                    text: 'You will be contacted soon.',
                                    icon: 'success',
                                    customClass: {
                                        popup: 'my-sweetalert-popup',
                                        title: 'my-sweetalert-title',
                                        content: 'my-sweetalert-content',
                                    }
                                });
                            </script>
                        @endif
                        @if (session('error'))
                            <script>
                                Swal.fire({
                                    title: '{{session('error')}}',
                                    icon: 'error',
                                    customClass: {
                                        popup: 'my-sweetalert-popup',
                                        title: 'my-sweetalert-title',
                                        content: 'my-sweetalert-content',
                                    }
                                });
                            </script>
                        @endif
                        <div class="d-flex form-group justify-content-between">
                            <div class="pr-3 w-50 mx-1">
                                <label for="name" class="font-weight-normal text-uppercase">Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name" required="">
                            </div>
                            <!--<div class="pr-3 w-50 mx-1">-->
                            <!--    <label for="number" class="font-weight-normal text-uppercase">Mobile No.</label>-->
                            <!--    <input type="tel" class="form-control" name="mobile" id="mobileNo"-->
                            <!--        placeholder="Mobile No." required="">-->
                            <!--</div>-->
                            
                            <div class="pr-3 w-50 mx-1">
                                <label for="number"class="font-weight-normal text-uppercase">Mobile No.</label>
                               <input type="number" class="form-control" id="mobileNo" name="mobile" onwheel="disableNumberInputScroll(event)"
                                   oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);" placeholder="Mobile No." required="">
                            </div>
                            
                            
                            
                        </div>
                        <div class="d-flex form-group justify-content-between">
                            <div class="pr-3 w-50 mx-1">
                                <label for="number" class="font-weight-normal text-uppercase">Whatsapp No.</label>
                                <input type="number" id="whatsappNo" name="whats_app" class="form-control" onwheel="disableNumberInputScroll(event)"
                                   oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
                                    placeholder="Whatsapp No." required="">
                            </div>
                            <div class="pr-3 w-50 mx-1">
                                <label for="subject" class="font-weight-normal text-uppercase">Subject</label>
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group pr-3 mx-1">
                            <label for="message" class="font-weight-normal text-uppercase">Message</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group mx-1">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-5 d-flex align-items-stretch wow fadeInRight" data-wow-delay="1.5s">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14883.570983236752!2d79.10658169999999!3d21.1566662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0cd99350d61%3A0xf41e3aed12c1485!2sSarrah%20Multispeciality%20Dental%20%2C%20Migraine%20%2CTMJ%20%26%20LaserClinic!5e0!3m2!1sen!2sin!4v1702706778123!5m2!1sen!2sin" width="100%" height="450" style="border:0;" loading="lazy"
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
                        <p><span class="font-weight-bold">Migradent, 3rd Floor Manorama Towers, Opp Bharat Mata Chowk, Itwari, NAGPUR
                                440002</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bg-info fa-solid fa-phone p-3 rounded-circle text-white"></i>
                    <div class="align-self-stretch box d-flex p-4 justify-content-center">
                        <p class="font-weight-bold pr-1">+91-9594369752
                            <img src="{{ asset('assets/images/qrmigradent.jpeg') }}" class="w-50 mx-auto d-block" alt="">
                        </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bg-info fa-solid fa-envelope p-3 rounded-circle text-white"></i>
                    <div class="align-self-stretch box d-flex p-4 justify-content-center">
                        <p><span class="font-weight-bold pr-1">frontdesk@migradent.com</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <i class="bg-info fa-solid fa-globe p-3 rounded-circle text-white"></i>
                    <div class="align-self-stretch box d-flex p-4 justify-content-center">
                        <p><span class="font-weight-bold pr-1"> www.migradent.com</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Get references to the mobile and WhatsApp input fields
        const mobileNoInput = document.getElementById('mobileNo');
        const whatsappNoInput = document.getElementById('whatsappNo');

        // Add an event listener to the mobile input field
        mobileNoInput.addEventListener('input', function() {
            // Update the WhatsApp input field with the same value
            whatsappNoInput.value = mobileNoInput.value;
        });
    </script>
    <!--onWheel-->
     <script>
        function disableNumberInputScroll(event) {
            event.preventDefault();
        }
    </script>
@endsection