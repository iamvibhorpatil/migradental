<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        MigraDent Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="{{ URL::to('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') }}" rel="stylesheet" />
    <link rel="stylesheet"
        href="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css') }}">
    <!-- Nucleo Icons -->
    <link href="{{ URL::to('admin_assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin_assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ URL::to('admin_assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin_assets/css/adminstyle.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ URL::to('admin_assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>    
   

</head>

<body class="g-sidenav-show   bg-gray-100">


    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    <!-- sidebar  -->

    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
                <img src="{{ asset('admin_assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100"
                    alt="main_logo">
                <span class="ms-1 font-weight-bold">MigraDent Dashboard </span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">




        <div class="collapse navbar-collapse w-auto pb-5" id="sidenav-collapse-main">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                {{-- @if (Auth::user()->hasPermissionTo('Add User') || Auth::user()->hasPermissionTo('View Users')) --}}
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('patient_form') || request()->is('patient_detail') ? 'active' : '' }}" onclick="toggleUser()">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

                            <i class="fa-solid fa-hospital-user text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 mt-2 dropdown-toggle">Patient</span>
                    </a>
                    <ul class="navbar-nav ps-5" id="users" style="display:{{request()->is('patient_form') || request()->is('patient_detail') ? '' : 'none' }};">
                        {{-- @if (Auth::user()->hasPermissionTo('Add User')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('patient_form') ? 'dashboard-aside-active' : '' }}" href="{{ Route('patient_form') }}">
                                <span class="nav-link-text ms-1"><i class="fa-solid fa-user-plus me-2"></i>New Patient<i
                                        class="fa-solid fa-arrow-right ms-2 "></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                        {{-- @if (Auth::user()->hasPermissionTo('View Users')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('patient_detail') ? 'dashboard-aside-active' : '' }}" href="{{ Route('detail') }}">
                                <span class="nav-link-text ms-1"><i class="fa-solid fa-user-nurse me-2"></i>Patient List<i
                                        class="fa-solid fa-arrow-right ms-2"></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                    </ul>
                </li>
                {{-- @endif --}}


                <!-- Treatment change to main-menu-->
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('adm_treatment') || request()->is('treatment_type') ? 'active' : '' }}" onclick="togglecategory()">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-tooth text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 mt-2 dropdown-toggle">Treatment Menu</span>
                    </a>
                    <ul class="navbar-nav ps-5" id="Treatment" style="display: {{request()->is('adm_treatment') || request()->is('treatment_type') ? '' : 'none' }} ;">
                        {{-- @if (Auth::user()->hasPermissionTo('Add User')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('adm_treatment') ? 'dashboard-aside-active' : '' }}" href="{{ Route('adm_treatment') }}">
                                <span class="nav-link-text ms-1"><i class="fa-brands fa-codepen me-2"></i>Sub Head<i
                                        class="fa-solid fa-arrow-right ms-2 "></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                        {{-- @if (Auth::user()->hasPermissionTo('View Users')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('treatment_type') ? 'dashboard-aside-active' : '' }}" href="{{ Route('treatment_type') }}">
                                <span class="nav-link-text ms-1"><i class="fa-solid fa-layer-group me-2"></i>Add Data<i
                                        class="fa-solid fa-arrow-right ms-2"></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                    </ul>
                </li>
                <!-- Treatment change to main-menu end-->

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('international_client') ? 'active' : '' }}" href="{{ route('international_client') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">International Client</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('testimonial_category') || request()->is('adm_testimonial') || request()->is('adm_video_testimonial') || request()->is('comment') ? 'active' : '' }}" onclick="toggletestimonial()">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-file-circle-question text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 mt-2 dropdown-toggle">Testimonial</span>
                    </a>
                    <ul class="navbar-nav ps-5" id="Testimonial" style="display:{{request()->is('testimonial_category') || request()->is('adm_testimonial') || request()->is('adm_video_testimonial') || request()->is('comment') ? '' : 'none'}} ;">

                        {{-- @if (Auth::user()->hasPermissionTo('View Users')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('testimonial_category') ? 'dashboard-aside-active' : '' }}" href="{{ Route('testimonial_category') }}">
                                <span class="nav-link-text ms-1"><i class="fa-brands fa-codepen me-2"></i>Sub Head<i
                                        class="fa-solid fa-arrow-right ms-2"></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                        {{-- @if (Auth::user()->hasPermissionTo('Add User')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('adm_testimonial') ? 'dashboard-aside-active' : '' }}" href="{{ Route('adm_testimonial') }}">
                                <span class="nav-link-text ms-1"><i class="fa-solid fa-layer-group me-2"></i>Image Data<i
                                        class="fa-solid fa-arrow-right ms-2 "></i></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('adm_video_testimonial') ? 'dashboard-aside-active' : '' }}" href="{{ Route('adm_video_testimonial') }}">
                                <span class="nav-link-text ms-1"><i class="fa-solid fa-layer-group me-2"></i>Video Data<i
                                        class="fa-solid fa-arrow-right ms-2 "></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                        {{-- @if (Auth::user()->hasPermissionTo('View Users')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('comment') ? 'dashboard-aside-active' : '' }}" href="{{ Route('comment') }}">
                                <span class="nav-link-text ms-1"><i class="fa-solid fa-comments me-2"></i>Comments<i
                                        class="fa-solid fa-arrow-right ms-2"></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link  {{ request()->is('images_category') || request()->is('adm_images') ? 'active' : '' }}" onclick="toggleimages()">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-regular fa-image text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 mt-2 dropdown-toggle">Images</span>
                    </a>
                    <ul class="navbar-nav ps-5" id="Images" style="display: {{request()->is('images_category') || request()->is('adm_images') ? '' : 'none'}};">
                        {{-- @if (Auth::user()->hasPermissionTo('Add User')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('images_category') ? 'dashboard-aside-active' : '' }}" href="{{ Route('images_category') }}">
                                <span class="nav-link-text ms-1"><i class="fa-brands fa-codepen me-2"></i>Sub Head<i
                                        class="fa-solid fa-arrow-right ms-2 "></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                        {{-- @if (Auth::user()->hasPermissionTo('View Users')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('adm_images') ? 'dashboard-aside-active' : '' }}" href="{{ Route('adm_images') }}">
                                <span class="nav-link-text ms-1"><i class="fa-solid fa-layer-group me-2"></i>Add Data<i
                                        class="fa-solid fa-arrow-right ms-2"></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link  {{ request()->is('videos_category') || request()->is('adm_videos') ? 'active' : '' }}" onclick="toggleVideos()">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-video text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 mt-2 dropdown-toggle">Videos</span>
                    </a>
                    <ul class="navbar-nav ps-5" id="Videos" style="display: {{request()->is('videos_category') || request()->is('adm_videos') ? '' : 'none'}};">
                        {{-- @if (Auth::user()->hasPermissionTo('Add User')) --}}
                        <li class="nav-item ">
                            <a class="nav-link {{request()->is('videos_category') ? 'dashboard-aside-active' : '' }}" href="{{ Route('videos_category') }}">
                                <span class="nav-link-text ms-1 "><i class="fa-brands fa-codepen me-2"></i>Sub Head<i
                                        class="fa-solid fa-arrow-right ms-2 "></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                        {{-- @if (Auth::user()->hasPermissionTo('View Users')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('adm_videos') ? 'dashboard-aside-active' : '' }}" href="{{ Route('adm_videos') }}">
                                <span class="nav-link-text ms-1"><i class="fa-solid fa-layer-group me-2"></i>Add Data<i
                                        class="fa-solid fa-arrow-right ms-2"></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link  {{ request()->is('adm_blog') || request()->is('blog_category') ? 'active' : '' }}" onclick="toggleBlog()">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-blog text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 mt-2 dropdown-toggle">Blog</span>
                    </a>
                    <ul class="navbar-nav ps-5" id="Blog" style="display: {{request()->is('adm_blog') || request()->is('blog_category') ? '' : 'none'}};">
                        {{-- @if (Auth::user()->hasPermissionTo('Add User')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('adm_blog') ? 'dashboard-aside-active' : '' }}" href="{{ Route('adm_blog') }}">
                                <span class="nav-link-text ms-1">Blog<i
                                        class="fa-solid fa-arrow-right ms-2 "></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                        {{-- @if (Auth::user()->hasPermissionTo('View Users')) --}}
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('blog_category') ? 'dashboard-aside-active' : '' }}" href="{{ Route('blog_category') }}">
                                <span class="nav-link-text ms-1">Blog Category<i
                                        class="fa-solid fa-arrow-right ms-2"></i></span>
                            </a>
                        </li>
                        {{-- @endif --}}
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ request()->is('request_callback') ? 'active' : '' }}" href="{{ route('request_callback') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-phone-volume text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Request Calback</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('adm_contact') ? 'active' : '' }}" href="{{route('adm_contact')}}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-address-book text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Contacts</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{ route('logout') }}"  onclick="return confirm('Are you sure') ">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-arrow-right-from-bracket text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Log Out</span>
                    </a>
                </li>

            </ul>
        </div>

    </aside>


    <!-- sidebar end -->





    <!-- main content  -->
    @yield('content')



    </main>


    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">MigraDent Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
                        onclick="sidebarType(this)">Dark</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="d-flex my-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- datatable  --}}
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

    <!--   Core JS Files   -->
    <script src="{{ URL::to('admin_assets/js/core/popper.min.js') }}"></script>
    <script src="{{ URL::to('admin_assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('admin_assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::to('admin_assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ URL::to('admin_assets/js/plugins/chartjs.min.js') }}"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="{{ URL::to('https://buttons.github.io/buttons.js') }}"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ URL::to('admin_assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <script>
        function toggleUser() {
            var content1 = document.getElementById("users");
            if (content1.style.display === "none") {
                content1.style.display = "block";
            } else {
                content1.style.display = "none";
            }
        }

        function togglecategory() {
            var content1 = document.getElementById("Treatment");
            if (content1.style.display === "none") {
                content1.style.display = "block";
            } else {
                content1.style.display = "none";
            }
        }

        function toggletestimonial() {
            var content1 = document.getElementById("Testimonial");
            if (content1.style.display === "none") {
                content1.style.display = "block";
            } else {
                content1.style.display = "none";
            }
        }

        function toggleimages() {
            var content1 = document.getElementById("Images");
            if (content1.style.display === "none") {
                content1.style.display = "block";
            } else {
                content1.style.display = "none";
            }
        }

        function toggleVideos() {
            var content1 = document.getElementById("Videos");
            if (content1.style.display === "none") {
                content1.style.display = "block";
            } else {
                content1.style.display = "none";
            }
        }

        function toggleBlog() {
            var content1 = document.getElementById("Blog");
            if (content1.style.display === "none") {
                content1.style.display = "block";
            } else {
                content1.style.display = "none";
            }
        }
    </script>
    <script>
        // Check if the success message element exists
        const successMessages = document.querySelectorAll('.alert');

        if (successMessages.length > 0) {
            // Set a timeout to hide each message after 5 seconds
            successMessages.forEach(function(successMessage) {
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 5000); // 5000 milliseconds = 5 seconds
            });
        }
    </script>

 <!--/* onwheel js */-->
  <script>
        function disableNumberInputScroll(event) {
            event.preventDefault();
        }
    </script>
     <!--/* onload date js */-->
    <script>
         window.onload = function() {
            document.getElementById('form_date').focus();
        };
    </script>

</body>

</html>
