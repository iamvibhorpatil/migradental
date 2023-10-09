@extends('admin.index1')

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Career Appplication Details</h6>
                </nav>
                {{-- half-nav  --}}
                @include('admin.half_nav')
                {{-- half-nav  --}}
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">


            <!-- add product dection -->


            <!-- table  -->
            <div class="row my-4">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-2">
                            <h6>Career Application Details</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">

                                            <p>
                                                <strong>ID</strong>: <span class="ps-5">{{ $detail->id }}</span>
                                            </p>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p>
                                                        <strong>Name</strong>: <span class="ps-5">
                                                            {{ $detail->name }}</span>
                                                    </p>

                                                    <p>
                                                        <strong>Mobile</strong>: <span class="ps-5">
                                                            {{ $detail->mobile }}</span>
                                                    </p>

                                                    <p>
                                                        <strong>Email</strong>: <span class="ps-5">{{ $detail->email }}
                                                        </span>
                                                    </p>

                                                    <p>
                                                        <strong>Position Applied</strong>: <span class="ps-5">
                                                            {{ $detail->position }}</span>
                                                    </p>

                                                    <p>
                                                        <strong>Address</strong>: <span
                                                            class="ps-5">{{ $detail->address }} </span>
                                                    </p>

                                                    <p>
                                                        <strong>State</strong>: <span class="ps-5">{{ $detail->state }}
                                                        </span>
                                                    </p>

                                                </div>
                                                <div class="col-12 col-md-6">

                                                    <p>
                                                        <strong>City</strong>: <span class="ps-5">
                                                            {{ $detail->city }}</span>
                                                    </p>

                                                    <p>
                                                        <strong>Date Of Birth</strong>: <span
                                                            class="ps-5">{{ $detail->dob }} </span>
                                                    </p>

                                                    <p>
                                                        <strong>Qualification</strong>: <span
                                                            class="ps-5">{{ $detail->qualification }} </span>
                                                    </p>

                                                    <p>
                                                        <strong>Experience/Fresher</strong>: <span
                                                            class="ps-5">{{ $detail->exp_frs }} </span>
                                                    </p>

                                                    <p>
                                                        <strong>CTC</strong>: <span class="ps-5">{{ $detail->ctc }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p>
                                                <strong>Message</strong>: <span class="ps-5">
                                                    {{ $detail->message }}</span>
                                            </p>


                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('career_form') }}" class="btn btn-dark">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end table  -->



        </div>
    </main>
@endsection
