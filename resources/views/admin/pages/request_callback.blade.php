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
                    <h6 class="font-weight-bolder text-white mb-0">Request Call </h6>
                </nav>
                {{-- half-nav  --}}
                @include('admin.half_nav')
                {{-- half-nav  --}}
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            @if (session('delete'))
                                <div class="text-white alert alert-danger">
                                    {{ session('delete') }}
                                </div>
                            @endif
                            <h6>Callback List</h6>
                        </div>
                        <div class="card-body px-3 pt-0 pb-2 table-responsive">
                            <table class="table" id="myTable8">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile No. </th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $p = 1; ?>
                                    @foreach ($call as $item)
                                        <tr class="">
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>
                                                <a href="{{ url('call_request/delete/' . $item->id) }}"
                                                    ><i class="fa-solid fa-trash img-thumbnail" style="color: #d11527;"></i></a>
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
