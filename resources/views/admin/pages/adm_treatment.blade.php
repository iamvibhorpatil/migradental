2@extends('admin.index1')

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
                    <h6 class="font-weight-bolder text-white mb-0">Treatment</h6>
                </nav>
                {{-- half-nav  --}}
                @include('admin.half_nav')
                {{-- half-nav  --}}
            </div>2
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-xlg-9 col-md-7 px-5">
                    <div class="card">
                        <div class="card-body">

                            <form action="store_patient_form" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="row input_field" style="">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="patient_number">Patient Number:</label>
                                        <input type="number" class="form-control" id="patient_number" name="patient_number"
                                            required>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="family_card_number">Family Card Number:</label>
                                        <input type="number" class="form-control" id="family_card_number"
                                            name="family_card_number" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="patient_name">Name:</label>
                                    <input type="text" class="form-control" id="patient_name" name="patient_name"
                                        required>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Column -->
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
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <script>
        function calculateAge() {
            const dobInput = document.getElementById('dob');
            const ageInput = document.getElementById('age');

            // Get the selected date of birth
            const dobValue = new Date(dobInput.value);

            // Calculate age based on the selected date of birth
            const today = new Date();
            const age = today.getFullYear() - dobValue.getFullYear();
            const monthDiff = today.getMonth() - dobValue.getMonth();

            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dobValue.getDate())) {
                age--;
            }

            // Set the calculated age in the "Age" input field
            ageInput.value = age;
        }
    </script>
@endsection
