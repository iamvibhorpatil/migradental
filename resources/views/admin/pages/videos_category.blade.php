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
                    <h6 class="font-weight-bolder text-white mb-0">Video Category </h6>
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

                            <form action="store_videos_category" method="POST" enctype="multipart/form-data">
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
                                        <label for="category"> Category </label>
                                        <input type="text" class="form-control" id="category" name="category"
                                            required  required pattern=".{0,30}"
                                            title="Please enter up to 30 characters for the Category field">
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

                                        <button type="submit"
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
                            <h6> Video Category</h6>
                        </div>
                        <div class="card-body px-3 pt-0 pb-2 table-responsive">
                            <table class="table" id="myTable8">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $p = 1; ?>
                                    @foreach ($videos_category as $item)
                        
                                        <tr class="">
                                            <td><?php echo $p++; ?></td>
                                            <td>{{$item->category}}</td>

                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a href="{{ url('videos_category/edit/' . $item->id) }}" onclick="return confirm('Are you sure you want edit this Category Type') "
                                                    class="btn btn-behance badge mx-2">Edit</a>
                                                <a href="{{ url('videos_category/delete/' . $item->id) }}" onclick="return confirm('Are you sure you want delete this Category Type') "
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
   
@endsection
