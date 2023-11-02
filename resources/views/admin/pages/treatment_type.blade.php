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
                    <h6 class="font-weight-bolder text-white mb-0">Treatment Type</h6>
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
                        <div class="mt-3 px-4">

                            <form action="store_treatment_type" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (session('success'))
                                    <div class="text-white alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="text-white alert alert-warming">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (session('delete'))
                                    <div class="text-white alert alert-danger">
                                        {{ session('delete') }}
                                    </div>
                                @endif
                                <div class="row input_field" style="">

                                    <div class="col-sm-12 col-md-6">
                                        <label for="category">Category</label>
                                        <select class="form-select category" id="category_id" name="category" aria-label="Default select example"
                                            required>
                                            <option selected>Select Category</option>
                                            <option value="Treatment">Treatment</option>
                                            <option value="Special Treatment">Special Treatment</option>
                                        </select>
                                        <span id="category-error" style="color: red;"></span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="treatment_type_id">Treatment Type</label>
                                        <select class="form-select treatment_type_id" name="treatment_type_id" aria-label="Default select example" id="treatment_type_id"
                                            required title="Select Category First">
                                            <option selected>Select Treatment</option>
                                        </select>
                                        <span id="treatment-type-error" style="color: red;"></span>

                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label for="question"> Question ?</label>
                                        <input type="text" class="form-control" id="question" name="question"
                                            required pattern=".{0,255}"
                                            title="Please enter up to 255 characters for the Question field">
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label for="answer"> Answer </label>
                                        <textarea type="text" class="form-control" id="answer" name="answer"
                                            required></textarea>
                                            <p id="description-error" style="color: red;"></p>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="image"> Image </label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            required>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="status">Status</label>
                                        <select class="form-select" name="status" aria-label="Default select example"
                                            required>
                                            <option value="Active" selcted>Active</option>
                                            <option value="Deactive">Deactive</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 my-3 d-flex justify-content-end">

                                        <button id="submit-button" type="submit" disabled
                                            class="btn btn-primary mx-auto mx-md-0 text-white">Submit</button>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Treatment Type List</h6>
                        </div>
                        <div class="card-body px-3 pt-0 pb-2 table-responsive">
                            <table class="table" id="myTable8">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Treatment Type</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">Answer</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $p = 1; ?>
                                    @foreach ($treatment_type as $item)
                        
                                        <tr class="">
                                            <td><?php echo $p++; ?></td>
                                            <td>{{ $item->category }}</td>
                                            <td>{{ $item->Treatment->treatment_type }}</td>
                                            <td><textarea class="form-control-sm" cols="15">{{ $item->question }}</textarea></td>
                                            <td><textarea class="form-control-sm" cols="30">{{ $item->answer }}</textarea></td>
                                            <td><img src="{{ url('assets/uploads/' . $item->image) }}" width="50px" alt=""></td>

                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a href="{{ url('treatment_type/edit/' . $item->id) }}" onclick="return confirm('Are you sure you want edit this Treatment Type') "
                                                    class="btn btn-behance badge mx-2">Edit</a>
                                                <a href="{{ url('treatment_type/delete/' . $item->id) }}" onclick="return confirm('Are you sure you want delete this Treatment Type') "
                                                    class="btn btn-danger badge mx-2">Delete</a>
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
        });
    </script>
    <script>
        $(document).ready(function(){

            $('.category').change(function(){
                let cat = $(this).val();
                // console.log(cat);
                $.ajax({
                    url:'/get_treatment_type',
                    type:'get',
                    data:{
                        'cat':cat,
                    },
                    datatype:'json',
                    success:function(result){
                        //  console.log(result);
                       var type = $('.treatment_type_id');
                       type.empty();
                       type.append('<option value="">Select Treatment</option>');
                       $.each(result, function(key, value){
                        type.append('<option value="' + value.id + '">' +
                                value.treatment_type + '</option>');
                       });

                    }
                })
            })

            
            $('#answer').on('input', function() {
                var maxChars = 555; 
                var currentChars = $(this).val().length;

                if (currentChars > maxChars) {
                    $('#description-error').text('Answer cannot exceed 500 characters');
                    $('#submit-button').prop('disabled', true);
                } else {
                    $('#description-error').text('');
                    $('#submit-button').prop('disabled', false);
                }
            });

            $('#category_id').on('change', function() {
                validateSelect($(this), $('#category-error'));
            });

            $('#treatment_type_id').on('change', function() {
                validateSelect($(this), $('#treatment-type-error'));
            });

            function validateSelect(selectElement, errorElement) {
                var selectedValue = selectElement.val();
                var submitButton = $('#submit-button');

                if (selectedValue === "") {
                    errorElement.text('Please select a category.');
                    submitButton.prop('disabled', true);
                } else {
                    errorElement.text('');
                    submitButton.prop('disabled', false);
                }
            }

        })
    </script>
@endsection
