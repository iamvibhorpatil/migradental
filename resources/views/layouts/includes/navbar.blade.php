 <!-- <header class="container">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-brands fa-youtube" style="color: #c12525;"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-brands fa-facebook" style="color: #223659;"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-brands fa-instagram" style="color: #d63676;"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn header-btn" style="background-color: #299eab; color:#ffff;border-radius:0;" >Request a Callback</button></a>
        </li>
    </ul>
</header>

 <div class="py-md-5 py-4 border-bottom">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center  px-3 px-md-0">
            <div class="col-md-4 order-md-1 mb-2 mb-md-0 align-items-center text-center">
                <a class="navbar-brand" href="{{route('/')}}">
                    <img src="assets/images/logo.png" alt="logo" width="180" height="86.46" style="max-width: 180px;">
                </a>
            </div>
            <div class="col-md-4 order-md-2 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
                <div class="icon d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-location-dot fa-2xl" style="color: #299eab;"></i>
                </div>
                <div class="pr-md-4 pl-md-0 pl-3 text">
                    <p class="con" style="font-weight:500;">198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
                <div class="icon d-flex justify-content-center align-items-center"><i class="fa-brands fa-whatsapp fa-2xl" style="color: #299eab;"></i> </i></div>
                <div class="text pl-3 pl-md-3"  style="font-weight:500;">
                   
                    <p class="cnt-no"><span>+91-4444-4444-44</span></p>
                   
                </div>
            </div>
        </div>
    </div> 
</div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light sticky-top" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa-solid fa-bars"></i></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">

                <li class="nav-item {{ request()->is('about') ? 'active' : ''}}"><a href="{{route('about')}}" class="nav-link">About</a></li>

                <li class="nav-item dropdown "><a href="{{route('treatment')}}" class="nav-link" data-bs-toggle="dropdown">Treatment <span><i class="fa-solid fa-caret-down" style="color: #000000;"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('orofacial_pain')}}">Orofacial Pain</a></li>
                        <li><a class="dropdown-item" href="#">Migraine & TMJ</a></li>
                        <li><a class="dropdown-item" href="#">TMD</a></li>
                        <li><a class="dropdown-item" href="#">Dental Sleep Medicine</a></li>
                        <li><a class="dropdown-item" href="#">Laser Dentistry</a></li>
                        <li><a class="dropdown-item" href="#">Full Mouth Rehabilitation</a></li>
                        <li><a class="dropdown-item" href="#">Veneers & Laminates</a></li>
                        <li><a class="dropdown-item" href="#">Smile Designing</a></li>
                        <li><a class="dropdown-item" href="#">Dental Implants</a></li>
                        <li><a class="dropdown-item" href="#">Laser Teeth Whitening</a></li>
                        <li><a class="dropdown-item" href="#">Root Canal</a></li>
                        <li><a class="dropdown-item" href="#">Root Canal Treatment with Laser</a></li>
                        <li><a class="dropdown-item" href="#">Dental Surgeries with Laser</a></li>
                        <li><a class="dropdown-item" href="#">Headaches</a></li>
                        <li><a class="dropdown-item" href="#">Child Care Dentistry</a></li>
                        <li><a class="dropdown-item" href="#">Orthodontics & Aligners</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown "><a href="{{route('special')}}" class="nav-link" data-bs-toggle="dropdown">Special Treatment <span><i class="fa-solid fa-caret-down" style="color: #000000;"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Feature1</a></li>
                        <li><a class="dropdown-item" href="#">Feature2</a></li>
                        <li><a class="dropdown-item" href="#">Feature3</a></li>
                        <li><a class="dropdown-item" href="#">Feature4</a></li>
                        <li><a class="dropdown-item" href="#">Feature5</a></li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('international') ? 'active' : ''}}"><a href="{{route('international')}}" class="nav-link">International Client</a></li>

                <li class="nav-item {{ request()->is('video') ? 'active' : ''}}"><a href="{{route('video')}}" class="nav-link">Video's</a></li>

                <li class="nav-item {{ request()->is('testimonial') ? 'active' : ''}}"><a href="{{route('testimonial')}}" class="nav-link">Testimonial</a></li>
                
                <li class="nav-item {{ request()->is('contact') ? 'active' : ''}}"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav> -->

<div class="container-fluid py-2 d-none d-lg-block" style="background-color:#47b0ab;">
        <div class="row">

            <div class="col-md-8" style="color: #fff;">

                <a href="https://wa.me/919372153411" target="_blank" class="text-white text-decoration-none px-3" style="border-left: 1px solid rgba(250,250,250,0.3);
                 padding: 10px 20px;"><i
                        class="fa fa-phone px-1"></i>Customer Support :+91 0000444400</a>
                <a href="#" class="text-white text-decoration-none px-3 text-lowercase" style="border-left: 1px solid rgba(250,250,250,0.3);
                 padding: 10px 20px;border-right: 1px solid rgba(250,250,250,0.3);"><i
                        class="fa-regular fa-envelope px-1"></i>Email : info@migradent.com</a>

            </div>
            <div class="col-md-4 text-end">

                <a href="#" class="text-white  text-decoration-none px-2" style="border-left: 1px solid rgba(250,250,250,0.3);padding-block: 10px;"><i
                        class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="text-white  text-decoration-none px-2" style="border-right: 1px solid rgba(250,250,250,0.3);padding-block: 10px;"><i
                        class="fa-brands fa-twitter"></i></a>
                <a href="#" class="text-white  text-decoration-none px-2" style="border-right: 1px solid rgba(250,250,250,0.3);padding-block: 10px;"><i
                        class="fa-brands fa-linkedin"></i></a>
                <a href="#" class="text-white  text-decoration-none px-2" style="border-right: 1px solid rgba(250,250,250,0.3);padding-block: 10px;"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="#" class="text-white  text-decoration-none px-2" style="border-right: 1px solid rgba(250,250,250,0.3);padding-block: 10px;"><i
                        class="fa-brands fa-youtube"></i></a>

            </div>


        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8 ps-0 ps-lg-2 ps-md-2"> 
                <a class="navbar-brand" href="{{route('/')}}">
                    <img src="assets/images/logo.png" alt="logo" width="180" height="86.46" style="max-width: 180px;">
                </a></div>

            <div class="col-4 align-self-center search_hide d-flex justify-content-end">
                <a href="#"><button class="btn btn-outline-info" >Request Call</button></a>
            </div>


        </div>
    </div>
    <!-- nav  -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-bg-color">
        <div class="container-fluid justify-content-end">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item {{ request()->is('about') ? 'active' : ''}}"><a href="{{route('about')}}" class="nav-link">About</a></li>

                <li class="nav-item dropdown "><a href="{{route('treatment')}}" class="nav-link" data-bs-toggle="dropdown">Treatment <span><i class="fa-solid fa-caret-down" style="color: #000000;"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('orofacial_pain')}}">Orofacial Pain</a></li>
                        <li><a class="dropdown-item" href="#">Migraine & TMJ</a></li>
                        <li><a class="dropdown-item" href="#">TMD</a></li>
                        <li><a class="dropdown-item" href="#">Dental Sleep Medicine</a></li>
                        <li><a class="dropdown-item" href="#">Laser Dentistry</a></li>
                        <li><a class="dropdown-item" href="#">Full Mouth Rehabilitation</a></li>
                        <li><a class="dropdown-item" href="#">Veneers & Laminates</a></li>
                        <li><a class="dropdown-item" href="#">Smile Designing</a></li>
                        <li><a class="dropdown-item" href="#">Dental Implants</a></li>
                        <li><a class="dropdown-item" href="#">Laser Teeth Whitening</a></li>
                        <li><a class="dropdown-item" href="#">Root Canal</a></li>
                        <li><a class="dropdown-item" href="#">Root Canal Treatment with Laser</a></li>
                        <li><a class="dropdown-item" href="#">Dental Surgeries with Laser</a></li>
                        <li><a class="dropdown-item" href="#">Headaches</a></li>
                        <li><a class="dropdown-item" href="#">Child Care Dentistry</a></li>
                        <li><a class="dropdown-item" href="#">Orthodontics & Aligners</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown "><a href="{{route('special')}}" class="nav-link" data-bs-toggle="dropdown">Special Treatment <span><i class="fa-solid fa-caret-down" style="color: #000000;"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Feature1</a></li>
                        <li><a class="dropdown-item" href="#">Feature2</a></li>
                        <li><a class="dropdown-item" href="#">Feature3</a></li>
                        <li><a class="dropdown-item" href="#">Feature4</a></li>
                        <li><a class="dropdown-item" href="#">Feature5</a></li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('international') ? 'active' : ''}}"><a href="{{route('international')}}" class="nav-link">International Client</a></li>

                <li class="nav-item {{ request()->is('video') ? 'active' : ''}}"><a href="{{route('video')}}" class="nav-link">Video's</a></li>

                <li class="nav-item {{ request()->is('testimonial') ? 'active' : ''}}"><a href="{{route('testimonial')}}" class="nav-link">Testimonial</a></li>

                <li class="nav-item {{ request()->is('contact') ? 'active' : ''}}"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                    <!-- <dialog id="dialog" class="border-0 rounded-3">
                        <form action="insertEnquiry" method="POST">
                            <input type="hidden" name="_token" value="77u8oJ32eqV7eb7kphY89kqhwsTJ3ZUMUVY7dfDk">
                            <div class="row g-2">
                                <div class="col-md-11">
                                    <h2 class="text-center mb-4" style="font-family: math;">Enquire Now</h2>
                                </div>
                                <div class="col-md-1">
                                    <button onclick="window.dialog.close();" aria-label="close" class="bg-transparent border-0 x"><i class="fa-solid fa-xmark"></i></button>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Name<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="designation" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Designation </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-floating">
                                        <input type="number" name="mobile" class="form-control" id="floatingInputGrid" placeholder="name@example.com" minimum="10" maximum="10" required>
                                        <label for="floatingInputGrid">Mobile<span
                                                class="text-danger">*</span></label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Email<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="organization" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Organization<span
                                                class="text-danger">*</span></label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="address" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Address<span
                                                class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="country" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Country<span
                                                class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="state" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">State<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="city" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">City<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="organizationType" class="form-label">Organization Type</label>
                                    <select id="organizationType" name="org_type" class="form-select" aria-label="Organization Type" required>
                                        <option value="default" selected>Default</option>
                                        <option value="Institute">Institute</option>
                                        <option value="Dealer">Dealer</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="referenceSource" class="form-label">Reference Source</label>
                                    <select id="referenceSource" name="reference" class="form-select" aria-label="Reference Source" required>
                                        <option value="default" selected>Reference...</option>
                                        <option value="Website">Website</option>
                                        <option value="Search Engine">Search Engine</option>
                                        <option value="Social Media">Social Media</option>
                                        <option value="Word of Mouth">Word of Mouth</option>
                                        <option value="Old Customer">Old Customer</option>
                                        <option value="E-mail">E-mail</option>
                                        <option value="Marketing Promotions">Marketing Promotions</option>
                                        <option value="Dealers">Dealers</option>
                                        <option value="News Magazine">News Magazine</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="subject" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                        <label for="floatingInputGrid">Subject<span
                                                class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a comment here" cols="30" rows="7" id="floatingTextarea" style="height: 150px;" required></textarea>
                                        <label for="floatingTextarea">Message<span
                                                class="text-danger">*</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center mt-3">
                                <button class="btn btn-outline-success text-dark">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </dialog> -->
                </ul>
            </div>
        </div>
    </nav>









    