@extends('layouts.includes.main')

@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('assets/images/page-heading-bg.jpg');background-size: cover;"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread" style="color:white;">Blogs</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="p-2 p-lg-5 p-md-5 row">
            <div class="col-md-2 col-sm-12 col-lg-2">
                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                    <a href="#"><button type="button" class="btn web_bg px-5 py-2 rounded-0">Button</button></a>
                    <hr class="m-0">
                </div>
            </div>
            <div class="col-md-10 col-sm-12 col-lg-10">
                <div class="row">

                    <div class="col-md-4 col-sm-12 col-lg-4 my-2">
                        <a href="" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 18rem;">
                                <img src="{{ asset('assets/images/dept-4.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Title</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 my-2">
                        <a href="" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 18rem;">
                                <img src="{{ asset('assets/images/dept-4.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Title</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 my-2">
                        <a href="" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 18rem;">
                                <img src="{{ asset('assets/images/dept-4.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Title</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script>
        function adjustClass() {
            const btnGroup = document.querySelector('.btn-group-vertical');
            const buttons = btnGroup.querySelectorAll('button');
            const screenWidth = window.innerWidth;

            if (screenWidth <= 769) {
                // Add classes for screens less than or equal to 769px
                btnGroup.classList.add('d-flex', 'overflow-scroll');
                btnGroup.classList.remove('btn-group-vertical');
                buttons.forEach(button => button.classList.add('border-r'));
            } else {
                // Add the btn-group-vertical class and remove added classes for screens greater than 769px
                btnGroup.classList.add('btn-group-vertical');
                btnGroup.classList.remove('d-flex', 'overflow-scroll');
                buttons.forEach(button => button.classList.remove('border-r'));
            }
        }

        // Initial call to adjustClass to set the class based on the initial screen width
        adjustClass();

        // Listen for window resize events to adjust the class
        window.addEventListener('resize', adjustClass);
    </script>
@endsection
