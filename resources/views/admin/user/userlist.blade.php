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
                    <h6 class="font-weight-bolder text-white mb-0">User List</h6>
                </nav>
                 {{-- half-nav  --}}
      @include('admin.half_nav')
      {{-- half-nav  --}}
            </div>
        </nav>
        <!-- End Navbar -->


        <!-- main content  -->
        <div class="container-fluid py-4">



            <!-- table  -->
            <div class="row my-4">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div id="success-message">
                                @if (session('success'))
                                    <div class="alert alert-danger">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                            <h6>User List</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0 px-4">
                                <table class="table align-items-center mb-0" id="myTable2">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                S.No.</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Name</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Email</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Access Role</th>
                                            <th class="text-secondary opacity-7">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $a = 1; ?>
                                        @foreach ($userData as $item)
                                            @php
                                                $get = $item->permissions->pluck('name');
                                                // dd($get);
                                                // die();
                                                $string = implode(', ', $get->all());

                                            @endphp
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <?php echo $a++; ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $item['name'] }}
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    {{ $item->email }}

                                                </td>

                                                <td style="white-space: normal">{{ $string }}</td>
                                                <td class="align-middle">
                                                    {{-- <a href="#"><span class="badge badge-sm bg-gradient-success">Update</span></a> --}}
                                                    <a href="{{ url('user/delete/' . $item->id) }}"
                                                        onclick="return confirm('Are you sure you want to delete this user?')"><span
                                                            class="badge badge-sm bg-gradient-danger">Delete</span></a>
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
            <!-- end table  -->






        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        const buttons = document.querySelectorAll('.elec-lab');
        const divs = document.querySelectorAll('.elec-table');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const targetCategory = button.getAttribute('data-category');

                divs.forEach(div => {
                    const divCategory = div.getAttribute('data-category');

                    if (divCategory === targetCategory) {
                        div.classList.add('active');
                    } else {
                        div.classList.remove('active');
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Set the duration (in milliseconds) for the success message to be displayed
            var duration = 5000; // 5 seconds

            // Fade out the success message after the specified duration
            $('#success-message').delay(duration).fadeOut();
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#myTable2').DataTable();
        });
    </script>
@endsection
