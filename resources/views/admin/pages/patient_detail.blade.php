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
                            @if (session('success'))
                                <div class="text-white alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('delete'))
                                <div class="text-white alert alert-danger">
                                    {{ session('delete') }}
                                </div>
                            @endif
                            <h6>Patient Details</h6>
                        </div>
                        <div class="pb-2" style="float: left; margin-left: 17px">
                            <button onclick="setDefaultView()" onmouseover="this.style.backgroundColor='#e6e6e6';"
                                onmouseout="this.style.backgroundColor='#fff';">Default View</button>
                            <button onclick="showAllColumns()" onmouseover="this.style.backgroundColor='#e6e6e6';"
                                onmouseout="this.style.backgroundColor='#fff';">Show All</button>
                        </div>


                        <div class="card-body px-3 pt-0 pb-2 table-responsive">
                            <table class="table" id="myTable8">
                                <thead>
                                    <tr class="text-center">
                                        {{-- <th scope="col">Sr.No</th> --}}
                                        <th scope="col">Patient Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Family Card No.</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Email Id</th>
                                        <th scope="col">Aadhar No</th>
                                        <th scope="col">Profession</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Pincode</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Guardian Name</th>
                                        <th scope="col">Guardian No.</th>
                                        <th scope="col">Guardian City</th>
                                        <th scope="col">Referred By</th>
                                        <th scope="col">Referred Name</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Appointment Sunday</th>
                                        <th scope="col">Remark 1</th>
                                        <th scope="col">Remark 2</th>
                                        <th scope="col">Remark 3</th>

                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $p = 1; ?>
                                    @foreach ($patientForm as $item)
                                        <tr class="align-baseline text-capitalize">
                                            <td>{{ $item->patient_number }}</td>
                                            <td>{{ $item->patient_name }}</td>
                                            <td>{{ $item->mobile_no }}</td>
                                            <td>{{ $item->form_date }}</td>
                                            <td>{{ $item->family_card_number }}</td>
                                            <td>{{ $item->dob }}</td>
                                            <td>{{ $item->age }}</td>
                                            <td>{{ $item->email_id }}</td>
                                            <td>{{ $item->aadhar_no }}</td>
                                            <td>{{ $item->profession }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->city }}</td>
                                            <td>{{ $item->pincode }}</td>
                                            <td>{{ $item->state }}</td>
                                            <td>{{ $item->country }}</td>
                                            <td>{{ $item->gender }}</td>
                                            <td>{{ $item->guardian_name }}</td>
                                            <td>{{ $item->guardian_no }}</td>
                                            <td>{{ $item->guardian_city }}</td>
                                            <td>{{ $item->referred_by }}</td>
                                            <td>{{ $item->referred_name }}</td>
                                            <td>{{ $item->time }}</td>
                                            <td>{{ $item->appointment_sunday }}</td>
                                            <td>{{ $item->remark1 }}</td>
                                            <td>{{ $item->remark2 }}</td>
                                            <td>{{ $item->remark3 }}</td>


                                            <td class="d-flex justify-content-around">
                                                <a href="{{ route('patient_detail_view', ['id' => $item->id]) }}"><i
                                                        class="fa-solid fa-eye img-thumbnail"
                                                        style="color: #0d50c5;"></i></a><br>
                                               
                                                <a href="{{ url('patient_form/edit/' . $item->id) }}"><i
                                                        class="fa-solid fa-pen-to-square img-thumbnail"
                                                        style="color: #1964e6;"></i></a><br>
                                                <a href="{{ url('patient_form/delete/' . $item->id) }}"><i
                                                        class="fa-solid fa-trash img-thumbnail"
                                                        style="color: #d11527;"></i></a>
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
            var currentDate = new Date();
            var formattedDate = currentDate.getFullYear() + '-' + (currentDate.getMonth() + 1) + '-' + currentDate.getDate();
        
            var table = $('#myTable8').DataTable({
                info: false,
                paging: false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excel',
                        exportOptions: {
                            rows: {
                                page: 'current'
                            },
                            columns: ':visible', // Only include visible columns
                        },
                        title: 'Patient_List_' + formattedDate
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            rows: {
                                page: 'current'
                            },
                            columns: ':visible', // Only include visible columns
                        },
                        title: 'Patient_List_' + formattedDate
                    }
                ]
            });
        
            table.search('').draw();
            $('#myTable8_filter input').focus();
        });



        document.addEventListener("DOMContentLoaded", function() {
            setDefaultView(); // Set default view when the page loads
        });

        function setDefaultView() {
            var table = document.getElementById("myTable8");

            // Hide all columns
            for (var i = 0; i < table.rows.length; i++) {
                for (var j = 0; j < table.rows[i].cells.length; j++) {
                    table.rows[i].cells[j].style.display = "";
                }
            }

            // Show only default columns
            for (var i = 0; i < table.rows.length; i++) {
                for (var j = 0; j < table.rows[i].cells.length; j++) {
                    if (j != 0 && j != 1 && j != 2 && j != 26) {
                        table.rows[i].cells[j].style.display = "none";
                    }
                }
            }
        }

        // Function to show all columns
        function showAllColumns() {
            var table = document.getElementById("myTable8");

            // Show all columns
            for (var i = 0; i < table.rows.length; i++) {
                for (var j = 0; j < table.rows[i].cells.length; j++) {
                    table.rows[i].cells[j].style.display = "";
                }
            }
        }

        // Function to show default columns
        function showDefaultColumns() {
            setDefaultView(); // Call the setDefaultView function to show default columns
        }
    </script>
@endsection
