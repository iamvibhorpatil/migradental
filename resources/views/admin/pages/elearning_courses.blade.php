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
                    <h6 class="font-weight-bolder text-white mb-0"> Learning Course</h6>
                </nav>
                 {{-- half-nav  --}}
      @include('admin.half_nav')
      {{-- half-nav  --}}
            </div>
        </nav>
        <!-- End Navbar -->


        <!-- main content  -->
        <div class="container-fluid py-4">



            <!-- add product dection -->

            <div class="row my-4">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            @if(session('success'))
                              <div class="alert alert-success text-white">
                                  {{ session('success') }}
                              </div>
                            @endif
                            @if(session('delete'))
                              <div class="alert alert-danger text-white">
                                  {{ session('delete') }}
                              </div>
                            @endif
                            @if(session('update'))
                              <div class="alert alert-success text-white">
                                  {{ session('update') }}
                              </div>
                            @endif
                            <h6>Add Learning Course</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <form class="px-5" action="inserteCourse" method="POST">
                                @csrf

                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="course_name" class="form-label">Course Name</label>
                                        <input type="text" class="form-control" name="course_name" id="course_name">
                                    </div>
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="course_detail" class="form-label">Course Details</label>
                                        <input type="text" class="form-control" name="course_detail" id="course_detail">
                                    </div>

                                </div>

                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="duration" class="form-label">Duration</label>
                                        <input type="text" class="form-control" name="duration" id="duration">
                                    </div>
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="time" class="form-label">Time</label>
                                        <input type="text" class="form-control" name="time" id="time">
                                    </div>

                                    <div class="mb-3 mx-3 w-50">
                                        <label for="mode" class="form-label">Mode</label>
                                        <input type="text" class="form-control" name="mode" id="mode">
                                    </div>

                                </div>

                                <div class="d-flex">

                                    <div class="mb-3 mx-3 w-50">
                                        <label for="course_charges" class="form-label">Course Charges </label>
                                        <input type="text" class="form-control" name="course_charges"
                                            id="course_charges">
                                    </div>

                                    <div class="mb-3 mx-3 w-50">
                                        <label for="contact_detail" class="form-label">Contact Detail</label>
                                        <input type="text" class="form-control" name="contact_detail"
                                            id="contact_detail">
                                    </div>

                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add product section  -->

            <!-- table  -->
            <div class="row my-4">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Learning Course List</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0 px-4">
                                <table class="table align-items-center mb-0" id="myTable6">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S.No.</th>
                                            
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Course Name</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Course Details</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Duration</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Time</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mode</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Course Charges</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact Detail</th>
                                            
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $a = 1; ?>
                                        @foreach ($ecourse as $item)


                                        <tr>
                                            <form action="update_category" method="get">
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <input type="hidden" name="id" value="{{$item['id']}}"> <?php echo $a++; ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($item)
                                                    <input type="hidden" name="course_name" value="{{$item['course_name']}}">{{$item['course_name']}}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item)
                                                    <input type="hidden" name="course_detail" value="{{$item['course_detail']}}">{{$item['course_detail']}}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item)
                                                    <input type="hidden" name="duration" value="{{$item['duration']}}">{{$item['duration']}}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item)
                                                    <input type="hidden" name="time" value="{{$item['time']}}">{{$item['time']}}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item)
                                                    <input type="hidden" name="mode" value="{{$item['mode']}}">{{$item['mode']}}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item)
                                                    <input type="hidden" name="course_charges" value="{{$item['course_charges']}}">{{$item['course_charges']}}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item)
                                                    <input type="hidden" name="contact_detail" value="{{$item['contact_detail']}}">{{$item['contact_detail']}}
                                                    @endif
                                                </td>


                                                <td class="align-middle text-center text-sm">
                                                    <a href="{{ url('ecourse/edit/' . $item->id) }}" class="btn btn-success">Edit</a>
                                                    <a href="{{ url('ecourse/delete/' . $item->id) }}" onclick="return confirm('Are you sure you want to delete this Course?')" class="btn btn-warning">Delete</a>
                                                </td>

                                            </form>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end table  -->


        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable6').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
     <script>
        $(document).ready(function() {
            var duration = 5000;
            $('.alert').delay(duration).fadeOut();
        });
    </script>
@endsection
