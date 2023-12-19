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
                    <h6 class="font-weight-bolder text-white mb-0">International Client</h6>
                </nav>
                {{-- half-nav  --}}
                @include('admin.half_nav')
                {{-- half-nav  --}}
            </div>
        </nav>
        <!-- End Navbar -->
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6> International Client</h6>
                        </div>
                        <div class="card-body px-3 pt-0 pb-2 table-responsive">
                            <table class="table" id="myTable8">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Sr No.</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Mobile No</th>
                                        <th scope="col">Email </th>
                                        <th scope="col">DOB </th>
                                        <th scope="col">preliminary_dental</th>
                                        <th scope="col">other_description</th>
                                        <th scope="col">preliminary_dental_other</th>
                                        <th scope="col">files</th>
                                        <th scope="col">whatsaap_booking</th>
                                        <th scope="col">treatment_duration</th>
                                        <th scope="col">td_startDate</th>
                                        <th scope="col">td_endDate</th>
                                        <th scope="col">accomodating_plan</th>
                                        <th scope="col">ap_startDate</th>
                                        <th scope="col">ap_endDate</th>
                                        <th scope="col">ap_text</th>
                                        <th scope="col">additional_service</th>
                                        <th scope="col">special_request</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $p = 1; ?>
                                    @foreach ($international_client as $item)
                                        <tr class="">
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <?php echo $p++; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $item->first_name }}</td>
                                            <td>{{ $item->last_name }}</td>
                                            <td>{{ $item->number }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->dob }}</td>
                                            <td><textarea class="form-control-sm" cols="20">{{ $item->preliminary_dental }}</textarea></td>
                                            <td><textarea class="form-control-sm" cols="15">{{ $item->other_description }}</textarea></td>
                                            <td><textarea class="form-control-sm" cols="15">{{ $item->preliminary_dental_other }}</textarea></td>
                                            <td> 
                                                @foreach(explode(',', $item->files) as $file)
                                                   <img src="{{ url('assets/uploads/' . trim($file)) }}" width="50px" alt="">
                                                @endforeach
                                            </td>
                                            <td>{{ $item->whatsaap_booking }}</td>
                                            <td>{{ $item->treatment_duration }}</td>
                                            <td>{{ $item->td_startDate }}</td>
                                            <td>{{ $item->td_endDate }}</td>
                                            <td>{{ $item->accomodating_plan }}</td>
                                            <td>{{ $item->ap_startDate }}</td>
                                            <td>{{ $item->ap_endDate }}</td>
                                            <td><textarea class="form-control-sm" cols="15">{{ $item->ap_text }}</textarea></td>
                                            <td><textarea class="form-control-sm" cols="15">{{ $item->additional_service }}</textarea></td>
                                            <td><textarea class="form-control-sm" cols="15">{{ $item->special_request }}</textarea></td>
                                            <td>
                                                {{-- <a href="{{ url('international_client/edit/' . $item->id) }}"
                                                    ><i class="fa-solid fa-pen-to-square img-thumbnail" style="color: #1964e6;"></i></a> --}}
                                                    <a href="{{ url('international_detail_view/' . $item->id) }}">
                                                        <i class="fa-solid fa-eye img-thumbnail" style="color: #0d50c5;"></i>
                                                    </a>
                                                <a href="{{ url('international_client/delete/' . $item->id) }}"
                                                    ><i class="fa-solid fa-trash img-thumbnail" style="color: #d11527;"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

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
            $('#answer').on('input', function() {
                var maxChars = 555;
                var currentChars = $(this).val().length;

                if (currentChars > maxChars) {
                    $('#description-error').text('Answer cannot exceed 555 characters');
                    $('#submit-button').prop('disabled', true);
                } else {
                    $('#description-error').text('');
                    $('#submit-button').prop('disabled', false);
                }
            });
        });
    </script>
@endsection
