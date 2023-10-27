@extends('layouts.includes.main')
@section('content')
    @foreach ($blog as $blog)
    @endforeach

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 widget-area">

                <aside class="widget post-widget">
                    <h3 class="widget-title">Latest Blog</h3>
                    <div class="post-widget-latest-blog">
                        @foreach ($blog_info as $item)
                            <div class="row d-flex text-center my-2">
                                <div class="col-lg-5" style="padding:0px!important;">
                                    <img class='img-fluid' src="{{ asset('assets/uploads/' . $item->image) }}" alt='image'
                                        style='height: 80px!important;width: 80px!important;aspect-ratio: 3/2;
                                        object-fit: cover;'>
                                </div>
                                <div class="col-lg-7 text-left p-0">
                                    <i class="fa-solid fa-calendar" style="color: #000000;"></i>
                                    <span>{{ date('F j, Y', strtotime($item->created_at)) }}</span>
                                    <p>{{ $item->title }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </aside>

                <aside class="widget widget_media_image ">
                    <div class="banner-img-box ttm-textcolor-white text-left ">
                        <div class="featured-content featured-content-banner pl-3">
                            <i class="fa-solid fa-phone-volume fa-2xl" style="color:#47b0ab"></i>
                            <div class="featured-title ttm-box-title pt-3">
                                <h5 style="color: white!important;">How Can We Help?</h5>
                            </div>
                            <div class="featured-desc">
                                <p>If you need any help, please<br> feel free to contact us.</p>
                            </div>
                            <div class="text-left " style="list-style:none; font-size: 14px; margin-right: 7px;">
                                <li style="border-bottom: 1px dashed #fff; padding-bottom: 10px;"><i class="fa fa-phone"
                                        style="color:#47b0ab; margin-right:7px;"></i>+1234567890</li>
                                <li style="padding-top: 10px;"><i class="fa-brands fa-whatsapp"
                                        style="color:#47b0ab; margin-right:10px;
                                        font-size: 20px;"></i><a
                                        href="https://wa.me/" class="text-white"
                                        style="text-decoration: none">+1234567890</a></li>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside class="widget widget_media_gallery">
                    <h3 class="widget-title">Photo Gallery</h3>
                    <div class="d-flex row">
                        @foreach ($image as $item)
                            <div class="gallery-item col-4">
                                <a href="{{ 'assets/uploads/' . $item->image }}" target="_blank" data-toggle="modal"
                                    data-target="#teamModal" data-image="{{ 'assets/uploads/' . $item->image }}">
                                    <img class="img-fluid" src="{{ 'assets/uploads/' . $item->image }}" alt="image"
                                        style="height: 92.25px!important;width: 91.99px!important;aspect-ratio: 3/2;
                                    object-fit: cover;">
                                </a>
                            </div>
                        @endforeach



                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel">
                        <div class="modal-dialog modal-lg" role="document" style="margin-top: 7vw;">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <i class="fa-solid fa-chevron-left fa-2xl" id="prevBtn" style="color: #000000;"></i>
                                    <img class=" px-5" src="assets/images/person_2.jpg" alt="image" width='600'
                                        height='460'>
                                    <i class="fa-solid fa-chevron-right fa-2xl" id="nextBtn" style="color: #000000;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            {{-- sidebar end  --}}

            {{-- blog  --}}
            <div class="col-lg-9 content-area">
                <div class="ttm-post-featured-wrapper">
                    <div class="ttm-post-featured">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <img class="img-fluid" src="{{ asset('assets/uploads/' . $blog->image) }}" alt="blog-post"
                            style="width: 100%;height: 500px;">
                    </div>
                </div>
                <div class="ttm-blog-single-content">
                    <div class="entry-content">
                        <div class="ttm-post-entry-header">
                            <div class="post-meta">
                                <span class="ttm-meta-line entry-date">
                                    <i class="fa fa-calendar"></i>
                                    <time
                                        class="entry-date published">{{ date('F j, Y', strtotime($blog->created_at)) }}</time>
                                </span>
                            </div>
                            <h5 class="text-right">{{ $blog->title }}</h5>
                        </div>
                        <p id="display">{{ $blog->description }} </p>


                        <article class="post ttm-blog-single clearfix">
                            <div class="ttm-blog-classic-box-comment">
                                <div id="comments" class="comments-area">
                                    @if (count($comment) > 0)
                                        <h2 class="comments-title">Comments</h2>
                                    @endif

                                    <div class="row">
                                        @foreach ($comment as $comment)
                                            <div class="col-2 my-2">
                                                <img src="{{ asset('assets/images/user_comment.jpg') }}" width="50px"
                                                    class="avatar float-right" alt="comment-img">
                                            </div>
                                            <div class="col-10 bg-light comment-box p-3 my-2">
                                                <div class="comment-meta commentmetadata">
                                                    <cite class="ttm-comment-owner">{{ $comment->name }}</cite>
                                                    <a>{{ $comment->created_at }}</a>
                                                </div>
                                                <div class="author-content-wrap">
                                                    <p>{{ $comment->comment }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>




                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">Leave a Comment</h3>

                                        <form method="POST" action="store_comment" id="ttm-comment-form"
                                            class="row comment-form clearfix">
                                            @csrf
                                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <textarea name="comment" rows="5" placeholder="Comments" required="required"
                                                        class="form-control with-border"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <input name="name" type="text" class="form-control with-border"
                                                        placeholder="Name (required)" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <input name="mobile" type="tel"
                                                        placeholder="What's App Number (required)" required="required"
                                                        class="form-control with-border">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group text-left mt-30">
                                                    <button type="submit" class="btn btn-outline-secondary rounded-0"
                                                        value="">
                                                        Post Comment
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div><!-- ttm-blog-classic-content end -->
        </article>
        <!-- ttm-service-single-content-are end -->




    </div>
    </div>
@endsection
