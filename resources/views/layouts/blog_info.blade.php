@extends('layouts.includes.main')
@section('content')


<div class="container mt-5"> <div class="row"> <div class="col-lg-3 widget-area">

    <aside class="widget post-widget">
        <h3 class="widget-title">Latest Blog</h3>
        <div class="post-widget-latest-blog">
            <div class="row d-flex text-center">
                <div class="col-lg-5" style="padding:0px!important;">
                    <img class='img-fluid' src='assets/images/person_1.jpg' alt='image'
                        style='height: 80px!important;width: 80px!important;'>
                </div>
                <div class="col-lg-7 text-left p-0">
                    <i class="fa-solid fa-calendar" style="color: #000000;"></i>
                    <span>June 27,2023</span>
                    <p>The importance of organic farming</p>
                </div>
            </div>
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
                    <li style="padding-top: 10px;"><i class="fa fa-envelope"
                            style="color:#47b0ab; margin-right:7px;"></i><a
                            href="mailto:info@example.com">info@example.com</a></li>
                </div>
            </div>
        </div>
    </aside>
    <aside class="widget widget_media_gallery">
        <h3 class="widget-title">Photo Gallery</h3>
        <div class="d-flex">
            <div class="gallery-item">
                <a href="assets/images/person_2.jpg" target="_blank" data-toggle="modal" data-target="#teamModal"
                    data-image="assets/images/person_2.jpg">
                    <img class="img-fluid" src="assets/images/person_2.jpg" alt="image"
                        style="height: 92.25px!important;width: 91.99px!important;">
                </a>
            </div>
            <div class="gallery-item">
                <a href="assets/images/person_3.jpg" target="_blank" data-toggle="modal" data-target="#teamModal"
                    data-image="assets/images/person_3.jpg">
                    <img class="img-fluid" src="assets/images/person_3.jpg" alt="image" style="height: 92.25px!important;width: 91.99px!important;">
                </a>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel">
            <div class="modal-dialog modal-lg" role="document" style="margin-top: 7vw;">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <i class="fa-solid fa-chevron-left fa-2xl" id="prevBtn" style="color: #000000;"></i>
                        <img class=" px-5" src="assets/images/person_2.jpg" alt="image" width='600' height='460'>
                        <i class="fa-solid fa-chevron-right fa-2xl" id="nextBtn" style="color: #000000;"></i>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>

<div class="col-lg-9 content-area">
    <div class="ttm-post-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="assets/images/person_1.jpg" alt="blog-post" style="width: 100%;height: 500px;">
        </div>
    </div>
    <div class="ttm-blog-single-content">
        <div class="entry-content">
            <div class="ttm-post-entry-header">
                <div class="post-meta">
                    <span class="ttm-meta-line entry-date">
                        <i class="fa fa-calendar"></i>
                        <time class="entry-date published">June 27, 2023</time>
                    </span>
                </div>
            </div>
            <p id="display">The Importance of Organic and Natural Farming

                The Importance of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe Importance
                of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and
                Natural FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and Natural
                FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe
                Importance of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe Importance of
                Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and
                Natural FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and Natural
                FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe
                Importance of Organic and Natural Farming

                The Importance of Organic and Natural Farming

                The Importance of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe Importance
                of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and
                Natural FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and Natural
                FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and Natural Farming

                The Importance of Organic and Natural Farming

                The Importance of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe Importance
                of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and
                Natural FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and Natural
                FarmingThe Importance of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe
                Importance of Organic and Natural FarmingThe Importance of Organic and Natural FarmingThe Importance of
                Organic and Natural FarmingThe Importance of Organic and Natural Farming

                &nbsp;

                &nbsp;
            </p>


    <article class="post ttm-blog-single clearfix">
        <div class="ttm-blog-classic-box-comment">
            <div id="comments" class="comments-area">
                <div class="comment-respond">
                    <h3 class="comment-reply-title">Leave a Comment</h3>
                    <p class="comment-notes">Your email address will not be published. </p>
                    <form method="post" id="ttm-comment-form" class="row comment-form clearfix">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea name="comment" rows="5" placeholder="Comments" required="required"
                                    class="form-control with-border"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control with-border"
                                    placeholder="Name (required)" required="required">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input name="email" type="text" placeholder="Email (required)" required="required"
                                    class="form-control with-border">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input name="website" type="text" placeholder="Website" required="required"
                                    class="form-control with-border">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group text-left mt-30">
                                <button type="submit" name="submit" id="submit"
                                    class="ttm-btn ttm-btn-size-md ttm-btn-color-darkgrey ttm-btn-style-border"
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