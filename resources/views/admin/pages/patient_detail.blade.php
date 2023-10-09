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
                            <h6>Patient Details</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2 table-responsive">
                            <table class="table" id="myTable8">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Patient Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Email ID</th>
                                        <th scope="col">View</th>
                                        {{-- <th scope="col">Update</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $p = 1; ?>
                                    @foreach ($patientForm as $item)
                                        <tr class="align-baseline">
                                            <td><?php echo $p++; ?></td>
                                            <td>{{ $item->patient_number }}</td>
                                            <td>{{ $item->patient_name }}</td>
                                            <td>{{ $item->mobile_no }}</td>
                                            <td>{{ $item->email_id }}</td>
                                            <td>
                                                <a href="{{ route('patient_detail_view', ['id' => $item->id]) }}"
                                                    class="btn btn-info badge">View</a><br>
                                                <a href="{{ route('export', ['id' => $item->id]) }}"
                                                    class="btn btn-secondary badge">Export</a>
                                            </td>
                                            <td>
                                                <a href="{{ url('patient_form/edit/' . $item->id) }}"
                                                    class="btn btn-behance badge">Edit</a><br>
                                                <a href="{{ url('patient_form/delete/' . $item->id) }}"
                                                    class="btn btn-danger badge">Delete</a>
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
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endsection
