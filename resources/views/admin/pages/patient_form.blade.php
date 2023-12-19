@extends('admin.index1')

@section('content')
    <main class="main-content position-relative border-radius-lg "> <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Patient Form</h6>
                </nav>
                {{-- half-nav --}}
                @include('admin.half_nav')
                {{-- half-nav --}}
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-xlg-9 col-md-7 px-5">
                    <div class="card">
                        <div class="card-body">

                            <form action="store_patient_form" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (session('success'))
                                    <div class="text-white alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="text-white alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if ($errors->has('patient_number'))
                                    <div class="alert text-white alert-danger" role="alert">
                                        {{ $errors->first('patient_number') }}
                                    </div>
                                @endif

                                <h4 class="mt-2 text-white">
                                    <span style="background-color: #47b0ab; padding: 10px; border-radius: 5px;">Personal
                                        Details</span>
                                </h4>
                                <div class="form-group mt-4">
                                    <div class="row input_field" style="">

                                        <div class="col-sm-12 col-md-3">
                                            <label for="form_date" class="fs-6 mb-0">Date:</label>
                                            <input type="date" class="form-control" id="form_date"
                                                onload="openDateInput()" name="form_date"
                                                value="{{ now()->setTimezone('Asia/Kolkata')->format('Y-m-d') }}">
                                        </div>

                                        <div class="col-sm-12 col-md-4">
                                            <label for="patient_number"class="fs-6 mb-0">Patient No.:</label>
                                            <input type="number" class="form-control" id="patient_number"
                                                name="patient_number" onwheel="disableNumberInputScroll(event)"
                                                oninput="javascript: if (this.value.length > 4) this.value = this.value.slice(0, 4);"
                                                required>
                                        </div>
                                    </div>
                                </div>



                                <div class="row input_field mt-3" style="">

                                    <div class="col-sm-12 col-md-4">
                                        <label for="patient_name"class="fs-6 mb-0">Name:</label>
                                        <input type="text" class="form-control text-capitalize" id="patient_name"
                                            name="patient_name" required>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <label for="mobile_no"class="fs-6 mb-0">Mobile No.:</label>
                                        <input type="number" class="form-control" id="mobile_no" name="mobile_no"
                                            onwheel="disableNumberInputScroll(event)"
                                            oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label for="email_id"class="fs-6 mb-0">Email ID:</label>
                                        <input type="email" class="form-control" id="email_id" name="email_id">
                                    </div>
                                </div>
                                <div class="row input_field mt-3" style="">
                                    <div class="col-sm-12 col-md-3">
                                        <label for="dob" class="fs-6 mb-0">Date of Birth:</label>
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            oninput="calculateAge()">
                                    </div>
                                    <div class="col-sm-12 col-md-2">
                                        <label for="age" class="fs-6 mb-0">Age:</label>
                                        <input type="number" class="form-control" id="age" name="age"
                                            onwheel="disableNumberInputScroll(event)" oninput="calculateDOB()">
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <label for="aadhar_no"class="fs-6 mb-0">Aadhar No.:</label>
                                        <input type="number" class="form-control" id="aadhar_no" name="aadhar_no"
                                            onwheel="disableNumberInputScroll(event)">
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <label for="profession" class="fs-6 mb-0">Profession:</label>
                                        <input type="text" class="form-control text-capitalize" id="profession"
                                            name="profession">
                                    </div>

                                </div>
                                <div class="d-flex mt-3">
                                    <label class="fs-6 mb-0">Gender</label>
                                    <div class="form-check ps-5">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="flexRadioDefaultMale" value="Male" required>
                                        <label class="form-check-label" for="flexRadioDefaultMale">Male</label>
                                    </div>
                                    <div class="form-check ps-5">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="flexRadioDefaultFemale" value="Female" required checked>
                                        <label class="form-check-label" for="flexRadioDefaultFemale">Female</label>
                                    </div>
                                    <div class="form-check ps-5">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="flexRadioDefaultOther" value="Other" required>
                                        <label class="form-check-label" for="flexRadioDefaultOther">Other</label>
                                    </div>
                                </div>
                                <h4 class="mt-5 text-white">
                                    <span
                                        style="background-color: #47b0ab; padding: 10px; border-radius: 5px;">Address</span>
                                </h4>


                                <div class="row input_field mt-4" style="">
                                    <div class="col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="address" class="fs-6 mb-0">Address:</label>
                                            <textarea id="address" class="form-control text-capitalize" placeholder="Type here..." name="address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="city" class="fs-6 mb-0">City:</label>
                                            <input type="text" class="form-control text-capitalize" id="city"
                                                name="city" value="Nagpur">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="state" class="fs-6 mb-0">State:</label>
                                            <input type="text" class="form-control text-capitalize" id="state"
                                                name="state" value="Maharashtra">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="pincode" class="fs-6 mb-0">Pin Code:</label>
                                            <input type="number" class="form-control" id="pincode" name="pincode"
                                                onwheel="disableNumberInputScroll(event)"
                                                oninput="javascript: if (this.value.length > 6) this.value = this.value.slice(0, 6);">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="country" class="fs-6 mb-0">Country:</label>
                                            <input type="text" class="form-control text-capitalize" id="country"
                                                name="country" value="India">
                                        </div>
                                    </div>
                                </div>





                                <h4 class="mt-5 text-white">
                                    <span style="background-color: #47b0ab; padding: 10px; border-radius: 5px;">Guardian
                                        For Reference If: Minor/Old Age/Spouse</span>
                                </h4>


                                <div class="row input_field mt-4">
                                    <div class="col-sm-12 col-md-4">
                                        <label for="guardian_name" class="fs-6 mb-0">Name:</label>
                                        <input type="text" class="form-control text-capitalize" id="guardian_name"
                                            name="guardian_name">
                                    </div>

                                    <div class="col-sm-12 col-md-4">
                                        <label for="guardian_no" class="fs-6 mb-0">Mobile No.:</label>
                                        <input type="number" class="form-control" id="guardian_no" name="guardian_no"
                                            onwheel="disableNumberInputScroll(event)"
                                            oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);">
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="guardian_city" class="fs-6 mb-0">City:</label>
                                        <input type="text" class="form-control text-capitalize" value="Nagpur"
                                            id="guardian_city" name="guardian_city">
                                    </div>
                                </div>


                                <h4 class="mt-5 text-white">
                                    <span style="background-color: #47b0ab; padding: 10px; border-radius: 5px;">Referred
                                        By</span>
                                </h4>
                                <div class="my-3 mt-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by" id="doctor"
                                            value="Doctor">
                                        <label class="form-check-label fs-6" for="doctor">Doctor</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by"
                                            id="family_friends" value="Family & Friends">
                                        <label class="form-check-label fs-6" for="family_friends">Family & Friends</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="referred_by"
                                            id="old_patient" value="Old Patient">
                                        <label class="form-check-label fs-6" for="old_patient">Old Patient</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="referred_by"
                                            id="wall_in" value="Walk In">
                                        <label class="form-check-label fs-6" for="wall_in">Walk In</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by"
                                            id="social_media" value="Social Media">
                                        <label class="form-check-label fs-6" for="social_media">Social Media</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by"
                                            id="print_media" value="Print Media">
                                        <label class="form-check-label fs-6" for="print_media">Print Media</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by" id="none"
                                            value="None" checked>
                                        <label class="form-check-label fs-6" for="none">None</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="referred_name" class="fs-6 mb-0">Name:</label>
                                            <input type="text" id="referred_name" class="form-control text-capitalize"
                                                name="referred_name">
                                        </div>
                                    </div>



                                    <h4 class="mt-5 text-white">
                                        <span style="background-color: #47b0ab; padding: 10px; border-radius: 5px;">Your
                                            Preferred Time Of Treatment</span>
                                    </h4>
                                    <div class="col-md-12 mt-4">
                                        <div class="my-2">
                                            <!--<label for="time" class="pe-4 fs-6 mb-0">Your Preferred Time Of Treatment :</label>-->
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="time[]"
                                                    id="inlineCheckbox1" value="8am to 10 am">
                                                <label class="form-check-label" for="inlineCheckbox1">8am to 10 am</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="time[]"
                                                    id="inlineCheckbox2" value="10am to 2pm">
                                                <label class="form-check-label" for="inlineCheckbox2">10am to 2pm</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="time[]"
                                                    id="inlineCheckbox3" value="2pm to 5pm">
                                                <label class="form-check-label" for="inlineCheckbox3">2pm to 5pm</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="time[]"
                                                    id="inlineCheckbox4" value="5pm to 8pm">
                                                <label class="form-check-label" for="inlineCheckbox4">5pm to 8pm</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="time[]"
                                                    id="inlineCheckbox5" value="None" checked>
                                                <label class="form-check-label" for="inlineCheckbox5">None</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="mt-5 text-white">
                                    <span style="background-color: #47b0ab; padding: 10px; border-radius: 5px;">Do You
                                        Prefer Appointment On Sunday</span>
                                </h4>
                                <div class="row input_field mt-4" style="">
                                    <div class="col-sm-12 col-md-6 d-flex">
                                        <!--<label class="fs-6 mb-0">Do You Prefer Appointment On Sunday</label>-->
                                        <div class="form-check ps-5">
                                            <input class="form-check-input" type="radio" name="appointment_sunday"
                                                id="flexRadioDefault1" value="Yes">
                                            <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                                        </div>
                                        <div class="form-check ps-5">
                                            <input class="form-check-input" type="radio" name="appointment_sunday"
                                                id="flexRadioDefault2" value="No" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">No</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="row input_field mt-4">
                                    <div class="col-sm-12 col-md-4">
                                        <label for="remark1" class="fs-6 mb-0">Remark1:</label>
                                        <textarea id="remark1" class="form-control text-capitalize" name="remark1"></textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="remark2" class="fs-6 mb-0">Remark2:</label>
                                        <textarea id="remark2" class="form-control text-capitalize" name="remark2"></textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="remark3" class="fs-6 mb-0">Remark3:</label>
                                        <textarea id="remark3" class="form-control text-capitalize" name="remark3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group mt-3 col-md-3">
                                    <label for="family_card_number"class="fs-6 mb-0">Family Card No.:</label>
                                    <input type="number" class="form-control" id="family_card_number"
                                        onwheel="disableNumberInputScroll(event)" name="family_card_number">
                                </div>

                                <!--24-11-2023-->

                        </div>



                        <div class="form-group">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <button type="submit"
                                    class="btn btn-primary mx-auto mx-md-0 text-white fs-6">Save</button>
                            </div>
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
                    'excel', 'pdf'
                ]
            });
        });
    </script>
    <script>
        // Add an event listener for the 'load' event on the window
        window.addEventListener('load', function() {
            // Call the calculateAge function when the page loads
            calculateAge();
        });

        function calculateAge() {
            const dobInput = document.getElementById('dob');
            const ageInput = document.getElementById('age');

            // If the 'dob' input field is empty, you can handle it as needed
            if (!dobInput.value) {
                // Handle empty date, you can display an error message or take appropriate action
                console.error('Date of birth is required');
                return;
            }

            const dobValue = new Date(dobInput.value);
            const today = new Date();

            // Calculate age based on the difference between the current year and the birth year
            const age = today.getFullYear() - dobValue.getFullYear();

            // Check if the birthday has occurred this year
            if (
                today.getMonth() < dobValue.getMonth() ||
                (today.getMonth() === dobValue.getMonth() && today.getDate() < dobValue.getDate())
            ) {
                ageInput.value = age - 1; // Subtract 1 year if the birthday hasn't occurred yet
            } else {
                ageInput.value = age;
            }
        }



        function calculateDOB() {
            const dobInput = document.getElementById('dob');
            const ageInput = document.getElementById('age');

            const age = parseInt(ageInput.value, 10);

            // Check if the entered age is a valid number
            if (isNaN(age)) {
                // Handle invalid age, you can display an error message or take appropriate action
                console.error('Invalid age entered');
                return;
            }

            const today = new Date();
            const dobYear = today.getFullYear() - age;

            // Set the date input with the calculated date
            dobInput.value = dobYear + '-01-01';
        }

        // Trigger calculateAge when the dob input changes
        document.getElementById('dob').addEventListener('change', calculateAge);
    </script>
@endsection
