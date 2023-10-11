    <div class="container-fluid py-2 d-none d-lg-block" style="background-color:#47b0ab;">
        <div class="row">
            <div class="col-md-8" style="color: #fff;">
                <a href="#" target="_blank" class="text-white text-decoration-none px-3" style="border-left: 1px solid rgba(250,250,250,0.3);padding: 10px 20px;"><i
                            class="fa fa-phone px-1"></i>Customer Support :+91 0000444400</a>
                    <a href="#" class="text-white text-decoration-none px-3 text-lowercase" style="border-left: 1px solid rgba(250,250,250,0.3);
                    padding: 10px 20px;border-right: 1px solid rgba(250,250,250,0.3);"><i
                            class="fa-regular fa-envelope px-1"></i>Email : info@migradent.com
                </a>
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
<<<<<<< HEAD
            <div class="col-8 ps-0 ps-4 ps-lg-2 ps-md-2"> 
                <a class="navbar-brand" href="{{route('/')}}">
=======
            <div class="col-8 ps-0 ps-lg-2 ps-md-2"> 
                <a class="navbar-brand py-0" href="{{route('/')}}">
>>>>>>> 85e964abbca62309823fcfb813f9d03a72702bc8
                    <img src="assets/images/logo.png" alt="logo" width="180" height="86.46" style="max-width: 180px;">
                </a>
            </div>

            <div class="col-4 align-self-center search_hide d-flex justify-content-end">
                <a href="#"><button class="btn btn-outline-info p-2" >Request a Callback</button></a>
            </div>
        </div>
    </div>
   


    <nav class="navbar navbar-expand-lg navbar-dark  ftco-navbar-light sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars-staggered fa-xl"style="color:#ffffff;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav justify-content-center">

                    <li class="nav-item {{ request()->is('about') ? 'active' : ''}}"><a href="{{route('about')}}" class="nav-link">About</a></li>

                    <li class="nav-item dropdown "><a href="{{route('treatment')}}" class="nav-link" data-bs-toggle="dropdown">Treatment <span><i class="fa-solid fa-caret-down nav-item" ></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('orofacial_pain')}}">Orofacial Pain</a></li>
                            <li><a class="dropdown-item" href="#">Migraine & TMJ</a></li>
                            <li><a class="dropdown-item" href="#">TMD</a></li>
                            <li><a class="dropdown-item" href="#">Dental Sleep Medicine</a></li>
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
                    <li class="nav-item dropdown "><a href="{{route('special')}}" class="nav-link" data-bs-toggle="dropdown">Special Treatment <span><i class="fa-solid fa-caret-down nav-item"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('laser_dentistry')}}">Laser Dentistry</a></li>
                            <li><a class="dropdown-item" href="#">Feature2</a></li>
                            <li><a class="dropdown-item" href="#">Feature3</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('international') ? 'active' : ''}}"><a href="{{route('international')}}" class="nav-link">International Client</a></li>

                    <li class="nav-item {{ request()->is('testimonial') ? 'active' : ''}}"><a href="{{route('testimonial')}}" class="nav-link">Testimonial</a></li>
                    
                    <li class="nav-item dropdown "><a href="#" class="nav-link" data-bs-toggle="dropdown">Gallery <span><i class="fa-solid fa-caret-down nav-item"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('image')}}">Images</a></li>
                            <li><a class="dropdown-item" href="{{route('video')}}">Videos</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('blogs') ? 'active' : ''}}"><a href="#" class="nav-link">Blogs</a></li>
                    
                    <li class="nav-item {{ request()->is('contact') ? 'active' : ''}}"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav> 











    