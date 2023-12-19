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
                    <h6 class="font-weight-bolder text-white mb-0">Update Patient Form</h6>
                </nav>
                {{-- half-nav  --}}
                @include('admin.half_nav')
                {{-- half-nav  --}}
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-xlg-9 col-md-7 px-5">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ url('patient_form/update/' . $patientForm->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
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
                                            <input type="date" class="form-control" id="form_date" name="form_date"
                                                onload="openDateInput()" value="{{ $patientForm->form_date }}">
                                        </div>

                                        <div class="col-sm-12 col-md-4">
                                            <label for="patient_number"class="fs-6 mb-0">Patient No.:</label>
                                            <input type="number" class="form-control" id="patient_number"
                                                oninput="javascript: if (this.value.length > 4) this.value = this.value.slice(0, 4);"
                                                value="{{ $patientForm->patient_number }}" name="patient_number"
                                                onwheel="disableNumberInputScroll(event)" required>
                                        </div>

                                    </div>
                                </div>

                                <div class="row input_field mt-3" style="">
                                    <div class="col-sm-12 col-md-4">
                                        <label for="patient_name"class="fs-6 mb-0">Name:</label>
                                        <input type="text" class="form-control text-capitalize" id="patient_name"
                                            value="{{ $patientForm->patient_name }}" name="patient_name" required>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <label for="mobile_no"class="fs-6 mb-0">Mobile No.:</label>
                                        <input type="number" class="form-control" id="mobile_no"
                                            oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
                                            value="{{ $patientForm->mobile_no }}" onwheel="disableNumberInputScroll(event)"
                                            name="mobile_no">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label for="email_id"class="fs-6 mb-0">Email ID:</label>
                                        <input type="email" class="form-control" id="email_id"
                                            value="{{ $patientForm->email_id }}" name="email_id">
                                    </div>

                                </div>

                                <div class="row input_field mt-3" style="">
                                    <div class="col-sm-12 col-md-3">
                                        <label for="dob" class="fs-6 mb-0">Date of Birth:</label>
                                        <input type="date" class="form-control" id="dob" name="dob" value="{{ $patientForm->dob }}">
                                    </div>
                                    <div class="col-sm-12 col-md-2">
                                        <label for="age" class="fs-6 mb-0">Age:</label>
                                        <input type="number" class="form-control" value="{{ $patientForm->age }}" id="age" name="age" onwheel="disableNumberInputScroll(event)">
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <label for="aadhar_no"class="fs-6 mb-0">Aadhar No.:</label>
                                        <input type="number" class="form-control" id="aadhar_no"
                                            value="{{ $patientForm->aadhar_no }}" onwheel="disableNumberInputScroll(event)"
                                            name="aadhar_no">
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <label for="profession" class="fs-6 mb-0">Profession:</label>
                                        <input type="text" class="form-control text-capitalize" id="profession"
                                            value="{{ $patientForm->profession }}" name="profession">
                                    </div>
                                </div>
                                <div class="d-flex  mt-3">
                                    <label class="fs-6 mb-0">Gender</label>
                                    <div class="form-check ps-5">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="flexRadioDefaultMale" value="Male" required
                                            {{ $patientForm->gender === 'Male' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefaultMale">Male</label>
                                    </div>
                                    <div class="form-check ps-5">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="flexRadioDefaultFemale" value="Female" required
                                            {{ $patientForm->gender === 'Female' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefaultFemale">Female</label>
                                    </div>
                                    <div class="form-check ps-5">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="flexRadioDefaultOther" value="Other" required
                                            {{ $patientForm->gender === 'Other' ? 'checked' : '' }}>
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
                                            <textarea id="address" class="form-control text-capitalize" name="address">{{ $patientForm->address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="city" class="fs-6 mb-0">City:</label>
                                            <input type="text" class="form-control text-capitalize" id="city"
                                                value="{{ $patientForm->city }}" name="city" value="Nagpur">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label for="state" class="fs-6 mb-0">State:</label>
                                            <input type="text" class="form-control text-capitalize" id="state"
                                                value="{{ $patientForm->state }}" name="state" value="Maharashtra">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="pincode" class="fs-6 mb-0">Pin Code:</label>
                                            <input type="number" class="form-control" id="pincode" name="pincode"
                                                oninput="javascript: if (this.value.length > 6) this.value = this.value.slice(0, 6);"
                                                value="{{ $patientForm->pincode }}"
                                                onwheel="disableNumberInputScroll(event)">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="country" class="fs-6 mb-0">Country:</label>
                                            <input type="text" class="form-control text-capitalize" id="country"
                                                value="{{ $patientForm->country }}" name="country" value="India">
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
                                            name="guardian_name" value="{{ $patientForm->guardian_name }}">
                                    </div>

                                    <div class="col-sm-12 col-md-4">
                                        <label for="guardian_no" class="fs-6 mb-0">Mobile No.:</label>
                                        <input type="number" class="form-control" id="guardian_no"
                                            oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
                                            value="{{ $patientForm->guardian_no }}"
                                            onwheel="disableNumberInputScroll(event)" name="guardian_no">
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="guardian_city" class="fs-6 mb-0">City:</label>
                                        <input type="text" class="form-control text-capitalize" value="Nagpur"
                                            value="{{ $patientForm->guardian_city }}" id="guardian_city"
                                            name="guardian_city">
                                    </div>
                                </div>

                                <h4 class="mt-5 text-white">
                                    <span style="background-color: #47b0ab; padding: 10px; border-radius: 5px;">Referred
                                        By:</span>
                                </h4>
                                <div class="my-3 mt-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by" id="doctor"
                                            value="Doctor"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Doctor' ? 'checked' : '' }}>
                                        <label class="form-check-label fs-6" for="doctor">Doctor</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by"
                                            id="family_friends" value="Family & Friends"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Family & Friends' ? 'checked' : '' }}>
                                        <label class="form-check-label fs-6" for="family_friends">Family & Friends</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="referred_by"
                                            id="old_patient" value="Old Patient"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Old Patient' ? 'checked' : '' }}>
                                        <label class="form-check-label fs-6" for="old_patient">Old Patient</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="referred_by"
                                            id="wall_in" value="Walk In"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Walk In' ? 'checked' : '' }}>
                                        <label class="form-check-label fs-6" for="wall_in">Walk In</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by"
                                            id="social_media" value="Social Media"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Social Media' ? 'checked' : '' }}>
                                        <label class="form-check-label fs-6" for="social_media">Social Media</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by"
                                            id="print_media" value="Print Media"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Print Media' ? 'checked' : '' }}>>
                                        <label class="form-check-label fs-6" for="print_media">Print Media</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by" id="none"
                                            value="None"
                                            {{ old('referred_by', $patientForm->referred_by) === 'None' ? 'checked' : '' }}>
                                        <label class="form-check-label fs-6" for="none">None</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="referred_name" class="fs-6 mb-0">Name:</label>
                                            <input type="text" id="referred_name" class="form-control text-capitalize"
                                                value="{{ $patientForm->referred_name }}" name="referred_name">
                                        </div>
                                    </div>

                                    <h4 class="mt-3 text-white">
                                        <span style="background-color: #47b0ab; padding: 10px; border-radius: 5px;">Your
                                            Preferred Time Of Treatment</span>
                                    </h4>
                                    <div class="col-md-12">
                                        <div class="my-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="time"
                                                    id="inlineCheckbox1" value="8am to 10 am"
                                                    {{ old('time', $patientForm->time) === '8am to 10 am' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineCheckbox1">8am to 10 am</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="time"
                                                    id="inlineCheckbox2" value="10am to 2pm"
                                                    {{ old('time', $patientForm->time) === '10am to 2pm' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineCheckbox2">10am to 2pm</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="time"
                                                    id="inlineCheckbox3" value="2pm to 5pm"
                                                    {{ old('time', $patientForm->time) === '2pm to 5pm' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineCheckbox3">2pm to 5pm</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="time"
                                                    id="inlineCheckbox4" value="5pm to 8pm"
                                                    {{ old('time', $patientForm->time) === '5pm to 8pm' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineCheckbox4">5pm to 8pm</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="time"
                                                    id="inlineCheckbox5" value="None"
                                                    {{ old('time', $patientForm->time) === 'None' ? 'checked' : '' }}>
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
                                        <!--<label class="fs-6">Do You Prefer Appointment On Sunday</label>-->
                                        <div class="form-check ps-5">
                                            <input class="form-check-input" type="radio" name="appointment_sunday"
                                                id="flexRadioDefault1" value="Yes"
                                                {{ $patientForm->appointment_sunday === 'Yes' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                                        </div>
                                        <div class="form-check ps-5">
                                            <input class="form-check-input" type="radio" name="appointment_sunday"
                                                id="flexRadioDefault2" value="No"
                                                {{ $patientForm->appointment_sunday === 'No' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault2">No</label>
                                        </div>
                                    </div>
                                </div>

                                <!--24-11-2023-->
                                <div class="row input_field mt-4">
                                    <div class="col-sm-12 col-md-4">
                                        <label for="remark1" class="fs-6 mb-0">Remark1:</label>
                                        <textarea id="remark1" class="form-control" name="remark1">{{ $patientForm->remark1 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="remark2" class="fs-6 mb-0">Remark2:</label>
                                        <textarea id="remark2" class="form-control" name="remark2">{{ $patientForm->remark2 }}</textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="remark3" class="fs-6 mb-0">Remark3:</label>
                                        <textarea id="remark3" class="form-control" name="remark3">{{ $patientForm->remark3 }}</textarea>
                                    </div>
                                </div>
                                <!--24-11-2023-->

                                <div class="col-sm-12 col-md-4 mt-2">
                                    <label for="family_card_number"class="fs-6 mb-0">Family Card No.:</label>
                                    <input type="number" class="form-control"
                                        value="{{ $patientForm->family_card_number }}" id="family_card_number"
                                        onwheel="disableNumberInputScroll(event)" name="family_card_number">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mt-1 d-flex justify-content-center">
                                        <a href="{{ route('detail') }}" class="mx-3"><button type="button"
                                                class="btn btn-dark mx-auto mx-md-0 text-white">Back</button></a>
                                        <button type="submit"
                                            class="btn btn-primary mx-auto mx-md-0 text-white">Update</button>
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
        // Function to calculate age from date of birth
    function calculateAge() {
        // Get the date of birth input value
        var dobInput = document.getElementById('dob').value;
        
        // If the date of birth is not empty
        if (dobInput) {
            // Create a Date object from the input value
            var dobDate = new Date(dobInput);

            // Get the current date
            var currentDate = new Date();

            // Calculate the age
            var age = currentDate.getFullYear() - dobDate.getFullYear();

            // Adjust the age if the birthday hasn't occurred yet this year
            if (currentDate.getMonth() < dobDate.getMonth() || (currentDate.getMonth() === dobDate.getMonth() && currentDate.getDate() < dobDate.getDate())) {
                age--;
            }

            // Set the calculated age to the age input field
            document.getElementById('age').value = age;
        }
    }

    // Attach the calculateAge function to the onload event of the window
    window.onload = function () {
        calculateAge();
    };

    // Optional: Add an event listener to recalculate age when the date of birth changes
    document.getElementById('dob').addEventListener('change', calculateAge);
    </script>
@endsection
