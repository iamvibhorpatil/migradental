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

                            <form action="{{ url('treatment_type/update/' . $treatment_type->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                               
                                <div class="row input_field" style="">

                                    <div class="col-sm-12 col-md-6">
                                        <label for="category">Category</label>
                                        <select class="form-select category" name="category" aria-label="Default select example"
                                            required>
                                            <option value="Treatment" {{$treatment_type->category === 'Treatment' ? 'selected':''}}>Treatment</option>
                                            <option value="Special Treatment"{{$treatment_type->category === 'Special Treatment' ? 'selected':''}}>Special Treatment</option>
                                          </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="treatment_type_id">Treatment Type</label>
                                        <select class="form-select treatment_type_id" name="treatment_type_id" aria-label="Default select example"
                                            required>
                                            <option value="{{$treatment_type->Treatment->id}}">{{$treatment_type->Treatment->treatment_type}}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label for="question"> Question ?</label>
                                        <input type="text" value="{{$treatment_type->question}}" class="form-control" id="question" name="question"
                                            required>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label for="answer"> Answer </label>
                                        <textarea type="text" class="form-control" id="question" name="answer"
                                            required> {{$treatment_type->answer}}</textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="image"> Image </label>
                                        <input type="file" class="form-control"  value="{{$treatment_type->image}}" id="image" name="image">
                                            <img src="{{url('assets/uploads/'.$treatment_type->image)}}" width="100px" alt="">
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="status">Status</label>
                                        <select class="form-select" name="status" aria-label="Default select example"
                                            required>
                                            <option value="Active"{{$treatment_type->status === 'Active' ? 'selected':''}}>Active</option>
                                            <option value="Deactive"{{$treatment_type->status === 'Deactive' ? 'selected':''}}>Deactive</option>
                                          </select>
                                    </div>

                                    <div class="col-sm-12 my-3 d-flex justify-content-end">

                                        <a href="{{route('treatment_type')}}" class="mx-3"><button type="button"
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

        })
    </script>
@endsection
