
<div class="container-fluid" style="background-color: #fff;">
    <div class="row align-items-center">
        <div class="col-12 text-center d-md-none">
            <a class="navbar-brand py-0" href="{{ route('/') }}">
                <img src="assets/images/logo.png" alt="logo" width="180" height="86.46"
                    style="max-width: 180px;">
            </a>
        </div>

        <div class="col-md-3 ps-0 ps-lg-2 ps-md-2 text-center d-none d-md-block">
            <a class="navbar-brand py-0" href="{{ route('/') }}">
                <img src="assets/images/logo.png" alt="logo" width="180" height="86.46"
                    style="max-width: 180px;">
            </a>
        </div>

        <div class="col-md-6 col-12 text-center" style="color: #47b0ab;">
            <a href="#" target="_blank" class="text-decoration-none px-3"
                style="border-left: 1px solid rgba(250, 250, 250, 0.3); padding: 10px 20px; color: #47b0ab;">
                <i class="fa fa-phone px-1 fa-2xl"></i>Call: +91 0000444400
            </a>
            <a href="#" class="text-decoration-none px-3"
                style="border-left: 1px solid rgba(250, 250, 250, 0.3); padding: 10px 20px; border-right: 1px solid rgba(250, 250, 250, 0.3); color: #47b0ab;">
                <i class="fa-brands fa-whatsapp px-1 fa-2xl"></i>Whatsapp No.: xxx-xx-xx-xxx
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

                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('about') }}"
                        class="nav-link">About</a></li>


                @php
                    $treatment = DB::table('treatments')
                        ->where('category', 'Treatment')
                        ->get();
                    $sp_treatment = DB::table('treatments')
                        ->where('category', 'Special Treatment')
                        ->get();
                @endphp

                <li class="nav-item dropdown "><a href="#" class="nav-link"
                        data-bs-toggle="dropdown">Treatment <span><i
                                class="fa-solid fa-caret-down nav-item"></i></span></a>
                    <ul class="dropdown-menu">
                        @foreach ($treatment as $item)
                            <li class="treatment" data-treatment-id="{{ $item->id }}"><a class="dropdown-item"
                                    href="#">{{ $item->treatment_type }}</a></li>
                        @endforeach

                    </ul>
                </li>
                <li class="nav-item dropdown "><a href="#" class="nav-link" data-bs-toggle="dropdown">Special
                        Treatment <span><i class="fa-solid fa-caret-down nav-item"></i></span></a>
                    <ul class="dropdown-menu">
                        @foreach ($sp_treatment as $item)
                            <li class="special_treatment" data-treatment-id="{{ $item->id }}"><a
                                    class="dropdown-item" href="#">{{ $item->treatment_type }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('international') ? 'active' : '' }}"><a
                        href="{{ route('international') }}" class="nav-link">International Client</a></li>

                <li class="nav-item {{ request()->is('testimonial') ? 'active' : '' }}"><a
                        href="{{ route('testimonial') }}" class="nav-link">Testimonial</a></li>

                <li class="nav-item dropdown "><a href="#" class="nav-link" data-bs-toggle="dropdown">Gallery
                        <span><i class="fa-solid fa-caret-down nav-item"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('image') }}">Images</a></li>
                        <li><a class="dropdown-item" href="{{ route('video') }}">Videos</a></li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('blogs') ? 'active' : '' }}"><a href="{{ route('blog') }}"
                        class="nav-link">Blogs</a></li>

                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}"
                        class="nav-link">Contact Us</a></li>
            </ul>
        </div>
        <button type="button" class="btn custom-btn" data-toggle="modal" data-target="#exampleModal">
            Request a Callback
        </button>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    jQuery.noConflict();
    jQuery(document).ready(function() {
        $(document).on('click', '.treatment', function(e) {
            e.preventDefault();
            let treatment_id = $(this).data('treatment-id');

            jQuery.ajax({
                url: '/get_view_treatment_id',
                type: 'get',
                data: {
                    'treatment_id': treatment_id
                },
                dataType: 'json',
                success: function(result) {
                    var treatment = JSON.stringify(result['treatment']);

                    sessionStorage.setItem('treatment', treatment);
                    window.location.href = '/view_treatment';
                }
            });

        });
    });

</script>
