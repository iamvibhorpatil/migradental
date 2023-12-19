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
                    <h6 class="font-weight-bolder text-white mb-0">International Client Detail</h6>
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
                            <h6>Appointment Booking via WhatsApp <span class="fs-6 fw-light">:{{ $international_client->whatsaap_booking }}</span></h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <form class="px-4">
                                <h5 class="mt-2 text-white">
                                    <span style="background-color: #47b0ab; padding: 5px; border-radius: 5px;">Personal
                                        Details</span>
                                </h5>
                                
                                <div class="row mt-3 input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="first_name">First name:</label>
                                        <span>{{ $international_client->first_name }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="last_name">Last name:</label>
                                        <span>{{ $international_client->last_name }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6 text-capitalize">
                                        <label for="number">Mobile :</label>
                                        <span>{{ $international_client->number }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="email">Email:</label>
                                        <span>{{ $international_client->email }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="dob">Date-of-birth :</label>
                                        <span>{{ $international_client->dob }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="language">Preferred Language:</label>
                                        <span>{{ $international_client->language }}</span>
                                    </div>
                                </div>

                                <h5 class="mt-2 text-white">
                                    <span style="background-color: #47b0ab; padding: 5px; border-radius: 5px;">Preliminary Dental Check-Up (Online)</span>
                                </h5>
                                
                                <div class="row input_field mt-3" style="width: 100%;">
                                    <div class="col-sm-12 col-md-12">
                                        <label for="preliminary_dental">Preliminary Dental Check-Up:</label>
                                        <span>{{ $international_client->preliminary_dental }}</span>
                                    </div>
                                </div>
                                <div class="row input_field mt-2" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="other_description">Other Preliminary Dental :</label>
                                        <span>{{ $international_client->other_description }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6 text-capitalize">
                                        <label for="preliminary_dental_other">Having Previous Dental Treatments :</label>
                                        <span>{{ $international_client->preliminary_dental_other }}</span>
                                    </div>
                                </div>
                                <h5 class="mt-2 text-white">
                                    <span style="background-color: #47b0ab; padding: 5px; border-radius: 5px;">Treatment Planning and Duration</span>
                                </h5>
                                <div class="row input_field mt-3" style="width: 100%;">
                                    <div class="col-sm-12 col-md-3">
                                        <label for="treatment_duration">Coming For Treatment :</label>
                                        <span>{{ $international_client->treatment_duration }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <label for="td_startDate">Arrival To India::</label>
                                        <span>{{ $international_client->td_startDate }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <label for="td_endDate">Departure From India:</label>
                                        <span>{{ $international_client->td_endDate }}</span>
                                    </div>
                                    
                                </div>
                            
                                <h5 class="mt-2 text-white">
                                    <span style="background-color: #47b0ab; padding: 5px; border-radius: 5px;">Accommodating Travel Plans</span>
                                </h5>
                                <div class="row input_field mt-3" style="width: 100%;">
                                    <div class="col-sm-12 col-md-3 text-capitalize">
                                        <label for="accomodating_plan">Accommodating Plan :</label>
                                        <span>{{ $international_client->accomodating_plan }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <label for="ap_startDate">From:</label>
                                        <span>{{ $international_client->ap_startDate }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <label for="ap_endDate">To:</label>
                                        <span>{{ $international_client->ap_endDate }}</span>
                                    </div>
                                    <div class="col-sm-12 col-md-3 text-capitalize">
                                        <label for="ap_text">Other Info :</label>
                                        <span>{{ $international_client->ap_text }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-12 text-capitalize">
                                        <label for="additional_service">Additional Services :</label>
                                        <span>{{ $international_client->additional_service }}</span>
                                    </div>
                                    
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-12 text-capitalize">
                                            <label for="special_request">Special Requests and Notes:</label>
                                            <span>{{ $international_client->special_request }}</span>
                                    </div>
                                </div>
                                <div class="row input_field" style="width: 100%;">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="file">Images uploded:</label>
                                        {{-- <span><img src="{{ url('assets/uploads/' . $international_client->files) }}" width="50px" alt=""></span> --}}
                                        <span>
                                            @foreach(explode(',', $international_client->files) as $file)
                                                <a href="{{ url('assets/uploads/' . trim($file)) }}" download>
                                                    <img src="{{ url('assets/uploads/' . trim($file)) }}" width="50px" alt="">
                                                </a>
                                            @endforeach
                                        </span>
                                        {{-- {{ $international_client->file }} --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 d-flex">
                                        <a href="/international_client" class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
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
