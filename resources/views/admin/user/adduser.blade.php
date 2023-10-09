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
                    <h6 class="font-weight-bolder text-white mb-0">Add User</h6>
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
                        @if (session('success'))
                            <div id="success-message" class="alert alert-success text-white">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card-header pb-0">
                            <h6>Add User</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <form class="px-5" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="role_access">Access Role</label><br>
                                                @if ($errors->has('role_access'))
                                                    <div>
                                                        <span class="text-danger"
                                                            role="alert"><strong>{{ $errors->first('role_access') }}</strong></span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    @foreach ($permissions as $permission)
                                                        <div class="col-md-4">
                                                            <div class="form-check-inline form-check">
                                                                <label class="form-check-label">
                                                                    @if (!empty($user))
                                                                        <input type="checkbox" name="role_access[]"
                                                                            class="form-check-input"
                                                                            value="{{ $permission->name }}"
                                                                            @if ($user->hasPermissionTo($permission->name)) checked @endif>
                                                                    @else
                                                                        <input type="checkbox" name="role_access[]"
                                                                            class="form-check-input"
                                                                            value="{{ $permission->name }}"
                                                                            @if (is_array(old('role_access')) && in_array($permission->name, old('role_access'))) checked @endif>
                                                                    @endif
                                                                    {{ $permission->name }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- add product section  -->





        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#success-message').fadeOut('slow');
            }, 5000);
        });
    </script>
@endsection
