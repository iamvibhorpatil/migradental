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
                    <h6 class="font-weight-bolder text-white mb-0">Patient Detail</h6>
                </nav>
                {{-- half-nav  --}}
                @include('admin.half_nav')
                {{-- half-nav  --}}
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row my-4">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h5>Patient Details <span class="fs-6 fw-light">Date:{{ $patientDetail->form_date }}</span></h5>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <form class="px-4">
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="patient_number">Patient Number:</label>
                                        <span>{{ $patientDetail->patient_number }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="family_card_number">Family Card Number:</label>
                                        <span>{{ $patientDetail->family_card_number }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="patient_name">Name :</label>
                                        <span>{{ $patientDetail->patient_name }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="dob">Date of Birth:</label>
                                        <span>{{ $patientDetail->dob }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="age">Age :</label>
                                        <span>{{ $patientDetail->age }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="mobile_no">Mobile Number:</label>
                                        <span>{{ $patientDetail->mobile_no }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="email_id">Email Id :</label>
                                        <span>{{ $patientDetail->email_id }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="aadhar_no">Aadhar Card:</label>
                                        <span>{{ $patientDetail->aadhar_no }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="address">Address :</label>
                                        <span>{{ $patientDetail->address }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="profession">Profession:</label>
                                        <span>{{ $patientDetail->profession }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="city">City :</label>
                                        <span>{{ $patientDetail->city }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="state">State:</label>
                                        <span>{{ $patientDetail->state }}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <span>{{ $patientDetail->country }}</span>
                                </div>

                                <h5>Guardian for Reference if:Minor/ Old Age / spouse</h5>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="guardian_name">Guardian Name :</label>
                                        <span>{{ $patientDetail->guardian_name }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="guardian_no">Mobile Number:</label>
                                        <span>{{ $patientDetail->guardian_no }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="guardian_city">Guardian City :</label>
                                        <span>{{ $patientDetail->guardian_city }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="referred_by">Referred by:</label>
                                        <span>{{ $patientDetail->referred_by }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="referred_name">Name:</label>
                                        <span>{{ $patientDetail->referred_name }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="time">Your Preffered Time Of treatment :</label>
                                        <span>{{ $patientDetail->time }}</span>
                                    </div>
                                </div>
                                <div>
                                    <label>Do you prefer appointment on sunday</label>
                                    <span>{{ $patientDetail->appointment_sunday }}</span>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 d-flex">
                                        <a href="/patient_detail" class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable8').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ]
            });
        });
    </script>
@endsection
