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
                    <h6 class="font-weight-bolder text-white mb-0">Comments </h6>
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

                            <form action="{{ url('comment/update/' . $comment->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @if (session('error'))
                                    <div class="text-white alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if ($errors->has('error'))
                                    <div class="text-white alert alert-danger">
                                        {{ $errors->first('error') }}
                                    </div>
                                @endif
                                <div class="row input_field" style="">

                                    <div class="col-sm-12 col-md-4">
                                        <label for="display">Name</label>
                                        <p class="form-control">{{ $comment->name }}</p>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="display">What's App No.</label>
                                        <p class="form-control">{{ $comment->mobile }}</p>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="display">Home Display Status</label>
                                        <select class="form-select" name="display" id="display"
                                            aria-label="Default select example" required>
                                            <option value="Yes"{{ $comment->display === 'Yes' ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="No"{{ $comment->display === 'No' ? 'selected' : '' }}>No
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-md-12">
                                        <label for="display">Comment</label>
                                        <p class="form-control"> {{ $comment->comment }}</p>
                                    </div>




                                    <div class="col-sm-12 my-3 d-flex justify-content-end">

                                        <a href="{{ route('comment') }}" class="mx-3"><button type="button"
                                                class="btn btn-dark mx-auto mx-md-0 text-white">Back</button></a>
                                        <button id="submit-button" type="submit"
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
@endsection
