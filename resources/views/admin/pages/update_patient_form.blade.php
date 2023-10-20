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
                    <h6 class="font-weight-bolder text-white mb-0">Patient Form</h6>
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
                                <div class="form-group">
                                    <label for="form_date">Date:</label>
                                    <input type="text" class="form-control" id="form_date" name="form_date" required
                                        value="{{ $patientForm->form_date }}">
                                </div>
                                <div class="row input_field" style="">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="patient_number">Patient Number:</label>
                                        <input type="number" class="form-control" id="patient_number" name="patient_number"
                                            value="{{ $patientForm->patient_number }}" required>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="family_card_number">Family Card Number:</label>
                                        <input type="number" class="form-control" id="family_card_number"
                                            name="family_card_number" required
                                            value="{{ $patientForm->family_card_number }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="patient_name">Name:</label>
                                    <input type="text" class="form-control" id="patient_name" name="patient_name"
                                        required value="{{ $patientForm->patient_name }}">
                                </div>



                                <div class="row" style="">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="dob">Date of Birth:</label>
                                        <input type="date" class="form-control" value="{{ $patientForm->dob }}"
                                            id="dob" name="dob" oninput="calculateAge()" required>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="age">Age:</label>
                                        <input type="number" value="{{ $patientForm->age }}" class="form-control"
                                            id="age" name="age" oninput="calculateDOB()" required>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="mobile_no">Mobile Number:</label>
                                    <input type="tel" class="form-control" id="mobile_no" name="mobile_no" required
                                        value="{{ $patientForm->mobile_no }}">
                                </div>
                                <div class="form-group">
                                    <label for="email_id">Email ID:</label>
                                    <input type="email" class="form-control" id="email_id" name="email_id" required
                                        value="{{ $patientForm->email_id }}">
                                </div>
                                <div class="form-group">
                                    <label for="aadhar_no">Aadhar Card:</label>
                                    <input type="text" class="form-control" id="aadhar_no" name="aadhar_no" required
                                        value="{{ $patientForm->aadhar_no }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <textarea id="address" class="form-control" name="address" required>{{ $patientForm->address }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="profession">Profession:</label>
                                    <input type="text" class="form-control" id="profession" name="profession" required
                                        value="{{ $patientForm->profession }}">
                                </div>
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control" id="city" name="city" required
                                        value="{{ $patientForm->city }}">
                                </div>
                                <div class="form-group">
                                    <label for="state">State:</label>
                                    <input type="text" class="form-control" id="state" name="state" required
                                        value="{{ $patientForm->state }}">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <input type="text" class="form-control" id="country" name="country" required
                                        value="{{ $patientForm->country }}">
                                </div>

                                <div>
                                    <label>Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="flexRadioDefaultMale" value="Male"
                                            {{ $patientForm->gender === 'Male' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefaultMale">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="flexRadioDefaultFemale" value="Female"
                                            {{ $patientForm->gender === 'Female' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefaultFemale">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="flexRadioDefaultOther" value="Other"
                                            {{ $patientForm->gender === 'Other' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefaultOther">Other</label>
                                    </div>
                                </div>


                                <h4>Guardian for Reference if:Minor/ Old Age / spouse</h4>

                                <div class="form-group">
                                    <label for="guardian_name">Name:</label>
                                    <input type="text" class="form-control" id="guardian_name" name="guardian_name"
                                        required value="{{ $patientForm->guardian_name }}">
                                </div>
                                <div class="row" style="">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="guardian_no">Mobile Number:</label>
                                        <input type="tel" class="form-control" id="guardian_no" name="guardian_no"
                                            required value="{{ $patientForm->guardian_no }}">
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="guardian_city">City:</label>
                                        <input type="text" class="form-control" id="guardian_city"
                                            name="guardian_city" required value="{{ $patientForm->guardian_city }}">
                                    </div>
                                </div>
                                <div class="my-3">
                                    <label for="referred_by" class="pe-4">Referred by:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by" id="doctor"
                                            value="Doctor"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Doctor' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="doctor">Doctor</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by"
                                            id="family_friends" value="Family & Friends"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Family & Friends' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="family_friends">Family & Friends</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by"
                                            id="old_patient" value="Old Patient"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Old Patient' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="old_patient">Old Patient</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by" id="wall_in"
                                            value="Walk In"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Walk In' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="wall_in">Walk In</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by"
                                            id="social_media" value="Social Media"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Social Media' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="social_media">Social Media</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="referred_by"
                                            id="print_media" value="Print Media"
                                            {{ old('referred_by', $patientForm->referred_by) === 'Print Media' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="print_media">Print Media</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="referred_name">Name:</label>
                                    <input type="text" id="referred_name" name="referred_name" required
                                        value="{{ $patientForm->referred_name }}">
                                </div>

                                <div class="my-2">
                                    <label for="time" class="pe-4">Your Preffered Time Of treatment :</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="time"
                                            id="inlineCheckbox1" value="8am to 10 am"
                                            {{ old('time', $patientForm->time) === '8am to 10 am' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineCheckbox1">8am to 10 am</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="time"
                                            id="inlineCheckbox2" value="10am to 2pm"
                                            {{ old('time', $patientForm->time) === '10am to 2pm' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineCheckbox2">10am to 2pm</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="time"
                                            id="inlineCheckbox3" value="2pm to 5pm"
                                            {{ old('time', $patientForm->time) === '2pm to 5pm' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineCheckbox3">2pm to 5pm</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="time"
                                            id="inlineCheckbox4" value="5pm to 8pm"
                                            {{ old('time', $patientForm->time) === '5pm to 8pm' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="radio">5pm to 8pm</label>
                                    </div>
                                </div>
                                <div>
                                    <label>Do you prefer appointment on sunday</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="appointment_sunday"
                                            id="flexRadioDefault1" value="Yes"
                                            {{ $patientForm->appointment_sunday === 'Yes' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="appointment_sunday"
                                            id="flexRadioDefault2" value="No"
                                            {{ $patientForm->appointment_sunday === 'No' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault2">No</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 d-flex justify-content-center">
                                        <a href="{{route('patient_form')}}" class="mx-3"><button type="button"
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

        function calculateDOB() {
            const dobInput = document.getElementById('dob');
            const ageInput = document.getElementById('age');

            // Get the entered age
            const age = parseInt(ageInput.value, 10);

            // Calculate the date of birth based on the entered age
            const today = new Date();
            const dobYear = today.getFullYear() - age;

            // Set the calculated date of birth to January 1st of the birth year
            dobInput.value = dobYear + '-01-01';
        }
    </script>
@endsection
