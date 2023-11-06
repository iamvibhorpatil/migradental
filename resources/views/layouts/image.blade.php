@extends('layouts.includes.main')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cmn-bg.jpg');background-size: cover;"
        data-stellar-background-ratio="0.5">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center wow bounceInUp" data-wow-delay="1.3s">
                    <h2 class="mb-2 bread font-weight-normal" style="color:white;"> Images </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container my-2">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-lg-3 wow fadeInLeft" data-wow-delay="1.5s">
                @foreach ($images_category as $item)
                    <button type="button" value="{{ $item->id }}"
                        class="images_category btn web_bg px-5 rounded-0 w-100">{{ $item->category }}</button>
                    <hr class="m-0">
                @endforeach



            </div>
            <div class="col-md-9 col-sm-12 col-lg-9 mb-4">
                <div class="row testi-img-video-blog-cmn testim">
                    @foreach ($adm_image_first as $item)
                        <div class="col-md-6 col-sm-12 col-lg-4 wow fadeInUp" data-wow-delay="1.5s">
                            <div class="card mx-auto">
                                <div class="gallery-item p-0 img-fluid">
                                    <a href="{{ url('assets/uploads/' . $item->image) }}" target="_blank" class="image-link"
                                        data-toggle="modal" data-target="#teamModal"
                                        data-image="{{ url('assets/uploads/' . $item->image) }}">
                                        <img class="img-fluid" src="{{ url('assets/uploads/' . $item->image) }}"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="card-body py-2 text-center">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Modal -->
                    <div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel">
                        <div class="modal-dialog modal-lg" role="document" style="margin-top: 7vw;">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <i class="fa-solid fa-chevron-left fa-2xl" id="prevBtn" style="color: #000000;"></i>
                                    <img class=" px-5" src="" alt="image" width='600' height='460'>
                                    <i class="fa-solid fa-chevron-right fa-2xl" id="nextBtn" style="color: #000000;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.images_category').click(function() {
                let cat_id = $(this).val();
                // console.log(cat_id);
                $.ajax({
                    url: '/get_images_category_id',
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
                                '<div class="col-md-4 col-sm-12 col-lg-4 wow fadeInUp">' +
                                '<div class="card mx-auto">' +
                                '<div class="gallery-item p-0 img-fluid">' +
                                '<a href="{{ url('assets/uploads/') }}/' + value
                                .image +
                                '" target="_blank" class="image-link" data-toggle="modal" data-target="#teamModal" data-image="{{ url('assets/uploads/') }}/' +
                                value.image + '">' +
                                '<img class="img-fluid" src="{{ url('assets/uploads/') }}/' +
                                value.image + '" alt="image">' +
                                '</a>' +
                                '</div>' +
                                '<div class="card-body py-2 text-center">' +
                                '<h5 class="card-title">' + value.title + '</h5>' +
                                '</div>' +
                                '</div>' +
                                '</div>'
                            );

                        });
                        $('.image-link').click(function() {
                            var imageSrc = $(this).attr(
                            'href'); 
                            console.log(imageSrc);
                            openImageModal(
                            imageSrc); 
                        });


                        if (result.length === 0) {
                            type.append(
                                '<p class=" wow fadeInUp">There are no images available.</p>'
                            );
                        }



                    }
                })
            })

        })
    </script>
@endsection
