<!-- <div class="container-fluid" style="background-color:#fff;"> 
    <div class="row">
        <div class="col-md-3 ps-0 ps-lg-2 ps-md-2 text-center"> <a class="navbar-brand py-0"
            href="{{route('/')}}">
            <img src="assets/images/logo.png" alt="logo" width="180" height="86.46" style="max-width: 180px;">
            </a>
        </div>

        <div class="col-md-6 align-self-center text-center" style="color: #47b0ab;"> 
            <a href="#" target="_blank" class="text-decoration-none px-3 header-2-block" style="border-left: 1px solid rgba(250,250,250,0.3);padding: 10px 20px;color:#47b0ab">
              <i class="fa fa-phone px-1"></i>Call:+91 0000444400
            </a>
            <a href=" #" class=" text-decoration-none px-3" style="border-left: 1px solid rgba(250,250,250,0.3);padding: 10px 20px;border-right: 1px solid rgba(250,250,250,0.3);color:#47b0ab">
              <i class="fa-brands fa-whatsapp px-1"></i>Whatsaap No. : xxx-xx-xx-xxx
            </a>
        </div>
        <div class="col-md-3 end-sec-icon align-self-center">
            <a href="#" class="text-decoration-none px-2 pr-2 header-1-block header-2-block">
               <i class="fa-brands fa-facebook-f" style="color:#47b0ab"></i></a>
            <a href=" #" class="text-decoration-none px-2 header-1-block">
              <i class="fa-brands fa-twitter" style="color:#47b0ab"></i></a> 
            <a href="#" class="text-decoration-none px-2 header-1-block">
              <i class="fa-brands fa-linkedin" style="color:#47b0ab"></i></a>
            <a href="#" class="text-decoration-none px-2 header-1-block">
              <i class="fa-brands fa-instagram" style="color:#47b0ab"></i></a>
            <a href="#" class="text-decoration-none px-2 header-1-block">
              <i class="fa-brands fa-youtube" style="color:#47b0ab"></i></a>
        </div>
    </div>
</div> -->

<div class="container-fluid" style="background-color: #fff;">
    <div class="row align-items-center">
        <div class="col-12 text-center d-md-none">
            <a class="navbar-brand py-0" href="{{route('/')}}">
                <img src="assets/images/logo.png" alt="logo" width="180" height="86.46" style="max-width: 180px;">
            </a>
        </div>

        <div class="col-md-3 ps-0 ps-lg-2 ps-md-2 text-center d-none d-md-block">
            <a class="navbar-brand py-0" href="{{route('/')}}">
                <img src="assets/images/logo.png" alt="logo" width="180" height="86.46" style="max-width: 180px;">
            </a>
        </div>

        <div class="col-md-6 col-12 text-center" style="color: #47b0ab;">
            <a href="#" target="_blank" class="text-decoration-none px-3" style="border-left: 1px solid rgba(250, 250, 250, 0.3); padding: 10px 20px; color: #47b0ab;">
                <i class="fa fa-phone px-1"></i>Call: +91 0000444400
            </a>
            <a href="#" class="text-decoration-none px-3" style="border-left: 1px solid rgba(250, 250, 250, 0.3); padding: 10px 20px; border-right: 1px solid rgba(250, 250, 250, 0.3); color: #47b0ab;">
                <i class="fa-brands fa-whatsapp px-1"></i>Whatsapp No.: xxx-xx-xx-xxx
            </a>
        </div>

        <div class="col-md-3 end-sec-icon align-self-center d-none d-md-block">
            <a href="#" class="text-decoration-none px-2">
                <i class="fa-brands fa-facebook-f" style="color: #47b0ab;"></i>
            </a>
            <a href="#" class="text-decoration-none px-2">
                <i class="fa-brands fa-twitter" style="color: #47b0ab;"></i>
            </a>
            <a href="#" class="text-decoration-none px-2">
                <i class="fa-brands fa-linkedin" style="color: #47b0ab;"></i>
            </a>
            <a href="#" class="text-decoration-none px-2">
                <i class="fa-brands fa-instagram" style="color: #47b0ab;"></i>
            </a>
            <a href="#" class="text-decoration-none px-2">
                <i class="fa-brands fa-youtube" style="color: #47b0ab;"></i>
            </a>
        </div>
    </div>
</div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Request form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group-rc">
                            <input type="text" id="name" name="name" placeholder="Your Name *" required>
                            <input type="tel" id="phone" name="phone" placeholder="Mobile No *" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->


    <nav class="navbar navbar-expand-lg navbar-dark ftco-navbar-light ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars-staggered fa-xl" style="color:#ffffff;"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="ftco-nav">
                <ul class="navbar-nav">

                    <li class="nav-item {{ request()->is('about') ? 'active' : ''}}"><a href="{{route('about')}}"
                            class="nav-link">About</a></li>

                    <li class="nav-item dropdown "><a href="{{route('treatment')}}" class="nav-link"
                            data-bs-toggle="dropdown">Treatment <span><i
                                    class="fa-solid fa-caret-down nav-item"></i></span></a>
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
                    <li class="nav-item dropdown "><a href="{{route('special')}}" class="nav-link"
                            data-bs-toggle="dropdown">Special Treatment <span><i
                                    class="fa-solid fa-caret-down nav-item"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('laser_dentistry')}}">Laser Dentistry</a></li>
                            <li><a class="dropdown-item" href="#">Feature2</a></li>
                            <li><a class="dropdown-item" href="#">Feature3</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('international') ? 'active' : ''}}"><a
                            href="{{route('international')}}" class="nav-link">International Client</a></li>

                    <li class="nav-item {{ request()->is('testimonial') ? 'active' : ''}}"><a
                            href="{{route('testimonial')}}" class="nav-link">Testimonial</a></li>

                    <li class="nav-item dropdown "><a href="#" class="nav-link" data-bs-toggle="dropdown">Gallery
                            <span><i class="fa-solid fa-caret-down nav-item"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('image')}}">Images</a></li>
                            <li><a class="dropdown-item" href="{{route('video')}}">Videos</a></li>
                        </ul>
                    </li>

                    <li class="nav-item {{ request()->is('blogs') ? 'active' : ''}}"><a href="{{route('blog')}}"
                            class="nav-link">Blogs</a></li>

                    <li class="nav-item {{ request()->is('contact') ? 'active' : ''}}"><a href="{{route('contact')}}"
                            class="nav-link">Contact Us</a></li>
                </ul>
            </div>
            <button type="button" class="btn custom-btn" data-toggle="modal" data-target="#exampleModal">
                Request a Callback
            </button>
        </div>
    </nav>