@extends('layouts.includes.main')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h2 class="mb-2 bread font-weight-normal" style="color:white;"> Blogs </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container my-2">
        <div class="row testi-img-video-blog-cmn">
            <div class="col-md-3 col-sm-12 col-lg-3">
                @foreach ($blog_category as $item)
                    <button type="button" value="{{ $item->id }}"
                        class="blog_category btn web_bg px-5 rounded-0 w-100 wow fadeInLeft">{{ $item->category }}</button>
                    <hr class="m-0">
                @endforeach

            </div>
            <div class="col-md-9 col-sm-12 col-lg-9 ">
                <div class="row testim">
                    @foreach ($adm_blog_first as $item)
                        <div class="col-md-4 col-sm-12 col-lg-4 wow fadeInUp blog_id" data-blog-id="{{ $item->id }}"
                            style="cursor: pointer;">
                            <div class="card mx-auto" style="min-height: 100%;">
                                <img src="{{ asset('assets/uploads/' . $item->image) }}" class="card-img-top p-2"
                                    alt="...">
                                <div class="card-body py-2 text-center d-flex" style="align-items: flex-end;">
                                    <h5 class="card-title text-center">{{ $item->title }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.blog_category').click(function() {
                let cat_id = $(this).val();
                // console.log(cat_id);
                $.ajax({
                    url: '/get_blog_category_id',
                    type: 'get',
                    data: {
                        'cat_id': cat_id,
                    },
                    datatype: 'json',
                    success: function(result) {
                        //  console.log(result);
                        var type = $('.testim');
                        type.empty();
                        $.each(result, function(key, value) {
                            type.append(
                                '<div class="col-md-4 col-sm-12 col-lg-4 wow fadeInUp"><div class="card mx-auto"><img src="{{ asset('assets/uploads/') }}/' +
                                value.image +
                                '" class="card-img-top p-2" alt="..."><div class="card-body py-2 text-center"><h5 class="card-title">' +
                                value.title + '</h5></div></div></div>');
                        });

                        if (result.length === 0) {
                            type.append(
                                '<p class=" wow fadeInUp">There are no images available.</p>'
                            );
                        }



                    }
                })
            })

            $('.blog_id').click(function() {
                let blog_id = $(this).attr('data-blog-id');
                // console.log(blog_id);
                // session(['blog_id' => blog_id]);
                $.ajax({
                    url: '/get_blog_id',
                    type: 'get',
                    data: {
                        'blog_id': blog_id,
                    },
                    datatype: 'json',
                    success: function(result) {
                        var blog = JSON.stringify(result['blog']);
                        sessionStorage.setItem('blog', blog);
                        sessionStorage.setItem('blog_id', blog_id);
                        window.location.href = '/blog_info';


                    }
                })
            })

        })
    </script>
@endsection
