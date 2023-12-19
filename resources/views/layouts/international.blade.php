@extends('layouts.includes.main')

@section('content')
<style>
        .date-range-container {
            margin-bottom: 20px;
        }

        .d-flex {
            margin-bottom: 10px;
            align-items: center;
        }

        label {
            margin-right: 10px;
            font-weight: bold;
        }

        input[type="date"] {
            width: 200px; /* Adjust the width as needed */
            height: 35px; /* Adjust the height as needed */
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-check-input[type="radio"] {
            width: 20px;
            /* Adjust the width as needed */
            height: 20px;
            /* Adjust the height as needed */
        }

        .row {
            --bs-gutter-x: 0rem;
        }

        .main_div {
            background-color: #456362;
            color: #fff;
            min-height: 40vh;
            max-height: fit-content;
        }

        .sub-sec-1 {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            flex-direction: column;
            min-height: 40vh;
            max-height: fit-content;
            font-size: large;
        }

        .checkbox-container input[type="checkbox"] {
            transform: scale(1.5);
            /* Adjust the scale factor as needed */
            margin-right: 10px;
            /* Optional: Adjust the spacing between checkbox and label */
        }

        .personal-info {
            margin-top: 2rem;
            margin-bottom: 2rem;
            height: fix=fit-content;
            border: 1px solid gray;
            border-radius: 10px;
        }


        .preliminary-check-up h2 {
            color: #47b0ab;
        }

        .preliminary-check-up p {
            font-size: large;
        }

        .services-request-section h2 {
            color: #47b0ab;
        }

        .treatment-planning-travel-plans h2 {
            color: #47b0ab;
        }

        .check-up-sub-sec {
            border: 1px solid gray;
        }

        .Preliminary-Dental-Check-Up {
            border-left: 1px solid gray;
        }

        .treatment-planning-2 {
            border-left: 1px solid gray;
        }

        .services-request-section-2 {
            border-left: 1px solid gray;
        }

        @media(max-width:991px) {
            .Preliminary-Dental-Check-Up {
                border-left: none;
            }

            .treatment-planning-2 {
                border-left: none;
            }

            .services-request-section-2 {
                border-left: none;
            }
        }

        label {
            font-weight: bold;
        }

        .sub-sec-2 {
            background-image: url('assets/images/img-2.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            /* z-index: 9999; */
        }
</style>


    <!-- Head Section -->
    <div class="container-fluid main_div ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                    <div class="sub-sec-1 " data-aos="fade-up">
                        <h1 class="top_head text-light fw-bold">Welcome to Migradent!!</h1>
                        <p>We are delighted to assist you in planning your dental treatment in India. To ensure a
                            seamless
                            experience, please fill out this questionnaire. Your responses will help us tailor your
                            treatment
                            plan and schedule effectively. Please read the instructions below before submitting the
                            form.
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 col-12 sub-sec-2">
                    {{-- <img src="assets/images/img-2.png" alt="img"/> --}}
                </div>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('Please fill yes or no section ') }}
    </div>
@endif


    <!-- Personal Info Section -->
    <form action="store_international_client" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="preliminary-check-up container my-5 shadow">
            <div class="">
                <div class="row" data-aos="zoom-in">

                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="personal-info-sec-2 px-3 py-4">
                            <h2 class="fw-bold">Appointment Booking via WhatsApp</h2>
                            <p class="py-2">Our dedicated team is available to assist you with appointment bookings via
                                WhatsApp. Please
                                confirm if you are comfortable with this mode of communication.
                            </p>

                            <div>
                                <div class="mb-2">
                                    <input class="form-check-input" type="radio" name="whatsaap_booking" id="flexRadioDefault1" value="Yes">
                                    <label for="flexRadioDefault1">Yes</label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="radio" name="whatsaap_booking" id="flexRadioDefault2" value="No">
                                    <label for="flexRadioDefault2">No</label>
                                </div>
                            </div>


                            <p class="py-2"> If yes, our team will contact you on WhatsApp number or else on your email.
                                For
                                further details
                                and scheduling.
                            </p>

                        </div>

                        <!-- -------------------------------------- -->

                        <div class="personal-info-sec-1 px-2">
                            <div class="row py-2">
                                <div class="col-md-6 px-1">
                                    <label for="first_name" class="form-label">First name</label>
                                    <input type="name" class="form-control text-capitalize" id="first_name" name="first_name" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6 px-1">
                                    <label for="last_name" class="form-label">Last name</label>
                                    <input type="name" class="form-control text-capitalize" id="last_name" name="last_name" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6 px-1">
                                    <label for="mobile" class="form-label">Mobile</label>
                                    <input type="number" class="form-control" id="number" name="number"
                                            onwheel="disableNumberInputScroll(event)"
                                            oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);">
                                </div>
                                <div class="col-md-6 px-1">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="example@gmail.com">
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-md-6 px-1">
                                    <label for="dob" class="form-label">Date-of-birth</label>
                                    <input type="date" id="dob" name="dob" class="form-control">
                                </div>
                                <div class="col-md-6 px-1">
                                    <label for="Language" class="form-label"> Preferred Language:</label>
                                    <select class="form-select" id="language" name="language" aria-label="Default select example">
                                        <option selected>Select Language</option>
                                        <option value="1">English</option>
                                        <option value="2">Hindi</option>
                                        <option value="3">Marathi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ---------------------------------------------------------- -->

                    <div class="col-sm-12 col-md-12 col-lg-6   py-3">
                        <div class="Preliminary-Dental-Check-Up px-3 py-2">
                            <h2 class="fw-bold">Preliminary Dental Check-Up (Online)</h2>

                            <p>To better understand your dental needs before your visit to India, we offer an online
                                preliminary
                                check-up. Please provide the following details:
                                - Describe your current dental issues or concerns: (Check Boxes)
                            </p>


                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Teeth pain & Sensitivity" name="preliminary_dental[]">
                                <label for="teeth-pain">Teeth pain & Sensitivity</label>
                            </div>

                            <div class="checkbox-container">
                                <input type="checkbox" id="headaches" value="Headaches or Migraine, aggravated in sunlight" name="preliminary_dental[]">
                                <label for="headaches">Headaches or Migraine, aggravated in sunlight</label>
                            </div>

                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Missing Teeth or Fractured Teeth" name="preliminary_dental[]">
                                <label for="teeth-pain">Missing Teeth or Fractured Teeth</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Food lodgement ,Frequent caries & Frequent filling
                                fractures" name="preliminary_dental[]">
                                <label for="teeth-pain">Food lodgement ,Frequent caries & Frequent filling
                                    fractures</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Sleep related issues , Insomnia, Disturbed sleep" name="preliminary_dental[]">
                                <label for="teeth-pain">Sleep related issues , Insomnia, Disturbed sleep</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Sleep Apnea, OSA , Snoring" name="preliminary_dental[]">
                                <label for="teeth-pain">Sleep Apnea, OSA , Snoring</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Pain in ear, ringing in ear-tinnitus, hearing loss, dizziness
                                -vertigo" name="preliminary_dental[]">
                                <label for="teeth-pain">Pain in ear, ringing in ear-tinnitus, hearing loss, dizziness
                                    -vertigo</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Eye pain, blurring of vision" name="preliminary_dental[]">
                                <label for="teeth-pain">Eye pain, blurring of vision</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Teeth grinding at night / day" name="preliminary_dental[]">
                                <label for="teeth-pain">Teeth grinding at night / day</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Neck & shoulder pain" name="preliminary_dental[]">
                                <label for="teeth-pain">Neck & shoulder pain</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Pain & click sound while mouth opening" name="preliminary_dental[]">
                                <label for="teeth-pain">Pain & click sound while mouth opening</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Restricted mouth opening, 2cm only out of 4cm" name="preliminary_dental[]">
                                <label for="teeth-pain">Restricted mouth opening, 2cm only out of 4cm</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Pain in Other Joints of the body" name="preliminary_dental[]">
                                <label for="teeth-pain">Pain in Other Joints of the body</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Pain in Other muscles of the body" name="preliminary_dental[]">
                                <label for="teeth-pain">Pain in Other muscles of the body</label>
                            </div>
                            <div class="checkbox-container">
                                <input type="checkbox" id="teeth-pain" value="Describe in brief if any of the above from Image, you suffer from" name="preliminary_dental[]">
                                <label for="teeth-pain">Describe in brief if any of the above from Image, you suffer
                                    from</label>
                            </div>
                            <div class="checkbox-container d-flex">
                                <input type="checkbox"  id="teeth-pain" value="other" name="preliminary_dental[]">
                                <label for="teeth-pain">Other</label>
                               <input type="text" id="other_description" name="other_description"
                                    placeholder="Please specify">
                            </div>

                            <p>Have you had any previous dental treatments? If yes, please specify: (Text Box)
                                <input type="text" id="preliminary_dental_other" name="preliminary_dental_other"
                                    placeholder="Please specify"><br>
                                - Upload recent dental x-rays or photographs (upto 5 files)
                            <div class="file-input-container">
                                <label for="files">Files:</label>
                                <input type="file" id="files" name="file[]" multiple>
                            </div>

                            </p>
                        </div>
                    </div>

                </div>

            </div>
            <!-- ----------------------------preliminary-check-up-ended------------------------------------------ -->

            <!-- -----------------------------4th-5th-block-start--------------------------------------------- -->

            <div class="">
                <div class="row treatment-planning-travel-plans ">
                    <div class="col-sm-12 col-md-12 col-lg-6 treatment-planning-1 px-2 py-2" data-aos="zoom-in">
                        <h2> Treatment Planning and Duration</h2>

                        <p class="py-2">Based on your preliminary check-up, we will devise a treatment plan, including
                            the
                            estimated number
                            of days required for the treatment.
                            - Do you have any time constraints or specific dates for your visit to India?
                        </p>

                        <div class="py-3">
                            <div class="mb-2">
                                <input class="form-check-input" type="radio" name="treatment_duration" value="Yes" id="flexRadioDefault3"
                                    onclick="toggleContent()">
                                <label for="flexRadioDefault3">Yes</label>
                            </div>

                            <div>
                                <input class="form-check-input" type="radio" name="treatment_duration" value="No" id="flexRadioDefault4"
                                    onclick="hideContent1()">
                                <label for="flexRadioDefault4">No</label>
                            </div>
                        </div>

                        <div id="contentToToggle1" style="display: none;">
                            <p>If yes, please specify your available dates:</p>
                            <div class="date-range-container" id="dateRangeContainer">
                                <label for="td_startDate" class="px-2">Arrival To India:</label>
                                <input type="date" id="td_startDate" name="td_startDate" class="form-control w-50 px-2">

                                <label for="td_endDate" class="px-2">Departure From India:</label>
                                <input type="date" id="td_endDate" name="td_endDate" class="form-control w-50">
                            </div>
                        </div>


                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 px-3 py-2 treatment-planning-2" data-aos="zoom-in">
                        <h2> Accommodating Travel Plans</h2>

                        <p class="">Understanding that you might want to travel within India during your treatment:
                            - Are there specific dates or periods when you would like to schedule travel or visits to
                            relatives?
                        </p>

                        <div class="py-3">
                            <div class="mb-2">
                                <input class="form-check-input" type="radio" name="accomodating_plan" value="Yes" id="flexRadioDefault5"
                                    onclick="showContent()">
                                <label for="flexRadioDefault5">Yes</label>
                            </div>

                            <div>
                                <input class="form-check-input" type="radio" name="accomodating_plan" value="No" id="flexRadioDefault6"
                                    onclick="hideContent()">
                                <label for="flexRadioDefault6">No</label>
                            </div>
                        </div>

                        <div id="contentToToggle" style="display: none;">
                            <p>If yes, please provide the dates or periods:</p>
                            <div class="date-range-container d-flex" id="dateRangeContainer1">
                                <label for="ap_startDate" class="px-2">From:</label>
                                <input type="date" id="ap_startDate" name="ap_startDate" class="form-control w-50">

                                <label for="ap_endDate" class="px-2">To:</label>
                                <input type="date" id="ap_endDate" name="ap_endDate" class="form-control w-50">
                            </div>
                            <input type="text" class="form-control mt-1" id="ap_text" name="ap_text" placeholder="Write if any...">
                        </div>


                    </div>

                </div>
            </div>
            <!-- -----------------------------4th-5th-block-end--------------------------------------------- -->
            <!-- -----------------------------6th-7th-block-start------------------------------------------- -->

            <div class="my-5">
                <div class="row services-request-section">
                    <div class="col-sm-12 col-md-12 col-lg-6 px-2 py-4 services-request-section-1" data-aos="zoom-in">
                        <h2>Additional Services</h2>
                        <p class="py-2"> Are there any additional services or assistance you would require during your
                            stay
                            in India?</p>
                        <p>(e.g.,
                            accommodation, transportation, language assistance)
                            <textarea class="form-control" id="additional_service" name="additional_service"></textarea>
                        </p>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 px-3 py-4 services-request-section-2" data-aos="zoom-in">
                        <h2>Special Requests and Notes</h2>
                        <p class="py-2">Please share any special requests or additional information that might help us
                            in
                            planning your
                            treatment and stay:
                        </p>
                        <textarea class="form-control" id="special_request" name="special_request"></textarea>


                    </div>
                </div>
                <div class=" my-3 py-3 d-flex justify-content-center align-items-center ">
                    <button class="btn btn-dark mx-1" type="submit">SUBMIT</button>
                    <button class="btn btn-dark mx-1" type="reset">RESET</button>
                </div>
            </div>
    </form>
</div>
   


    <!-- -----------------------------6th-7th-block-end--------------------------------------------- -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Add event listener to dynamically manage the file input elements
        document.getElementById('files').addEventListener('change', function (event) {
            // Clear previously added file input elements
            document.querySelectorAll('.file-input-dynamic').forEach(function (element) {
                element.remove();
            });

            // Add exactly five new file input elements
            for (let i = 0; i < 4; i++) {
                const newInput = document.createElement('input');
                newInput.type = 'file';
                newInput.name = 'file[]';
                newInput.classList.add('file-input-dynamic');
                newInput.style.marginTop = '5px';
                newInput.style.display = 'block';
                document.querySelector('.file-input-container').appendChild(newInput);
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    <script>
        function showContent() {
            document.getElementById("contentToToggle").style.display = "block";
        }

        function hideContent() {
            document.getElementById("contentToToggle").style.display = "none";
        }

        function toggleContent() {
            document.getElementById("contentToToggle1").style.display = "block";
        }

        function hideContent1() {
            document.getElementById("contentToToggle1").style.display = "none";
        }
    </script>

    <script>
        AOS.init();
    </script>
@endsection
