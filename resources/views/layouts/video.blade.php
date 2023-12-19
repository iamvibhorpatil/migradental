@extends('layouts.includes.main')
@section('content')
   
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center wow bounceInUp" data-wow-delay="1.3s">
                    <h2 class="mb-2 bread font-weight-normal" style="color:white;"> Videos </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row my-2 testi-img-video-blog-cmn">
            <div class="col-md-3 col-sm-12 col-lg-3 wow fadeInLeft" data-wow-delay="1.5s">
                @foreach ($videos_category as $item)
                    <button type="button" value="{{ $item->id }}"
                        class="videos_category btn web_bg px-5 rounded-0 w-100 wow fadeInLeft">{{ $item->category }}</button>
                    <hr class="m-0">
                @endforeach


            </div>
            <div class="col-md-9 col-sm-12 col-lg-9 mb-4">
                <div class="row testim">
                    @foreach ($adm_videos_first as $item)
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4 wow fadeInUp mb-3" data-wow-delay="1.5s">
                            <div class="card mx-auto">
                                <iframe width="300" height="170"
                                    src="{{ url('https://www.youtube.com/embed/' . $item->video) }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                                <div class="card-body py-2 text-center">
                                    <h5 class="card-title">{{ $item->title }}</h5>
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

            $('.videos_category').click(function() {
                let cat_id = $(this).val();
                // console.log(cat_id);
                $.ajax({
                    url: '/get_videos_category_id',
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
                                '<div class="col-md-6 col-sm-12 col-lg-6 col-xl-4 wow fadeInUp">' +
                                '<div class="card mx-auto">' +
                                '<iframe width="300" height="170" src="https://www.youtube.com/embed/' +
                                value.video + '" ' +
                                'title="YouTube video player" frameborder="0" ' +
                                'allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" ' +
                                'allowfullscreen></iframe>' +
                                '<div class="card-body py-2 text-center">' +
                                '<h5 class="card-title">' + value.title + '</h5>' +
                                '</div>' +
                                '</div>' +
                                '</div>'
                            );
                        });


                        if (result.length === 0) {
                            type.append(
                                '<p class=" wow fadeInUp">There are no videos available.</p>'
                            );
                        }



                    }
                })
            })

        })
    </script>
@endsection