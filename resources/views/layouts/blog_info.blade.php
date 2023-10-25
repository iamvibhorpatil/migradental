@extends('layouts.includes.main')
@section('content')

   

<div class="sidebar ttm-sidebar ttm-bgcolor-white clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-3 widget-area">
                <aside class="widget post-widget">
                    <h3 class="widget-title">Latest Blog</h3>
                    <ul class="widget-post ttm-recent-post-list">
                        <li>
                            <a href=''>
                                <img src='assets/images/doc-5.jpg' alt='post-img'>
                            </a>
                            <span class='post-date'><i class='fa fa-calendar'></i>$date</span>
                            <a href=''>$title2</a>
                        </li>
                    </ul>
                </aside>

                <aside class="widget widget_media_image">
                    <div class="banner-img-box ttm-textcolor-white text-left">
                        <div class="featured-content featured-content-banner">
                            <i class="fa-solid fa-phone-volume"></i>
                            <div class="featured-title ttm-box-title">
                                <h5 style="color: white!important;">How Can We Help?</h5>
                            </div>
                            <div class="featured-desc">
                                <p>If you need any help, please<br> feel free to contact us.</p>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone"></i>+1234567890</li>
                                <li><i class="fa fa-envelope-o"></i><a
                                        href="mailto:info@example.com">info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <aside class="widget widget widget_media_gallery">
                    <h3 class="widget-title">Photo Gallery</h3>
                    <div>
                        <div class='gallery-item'>
                            <a href='' target='_blank' data-toggle='modal' data-target='#teamModal' data-image=''>
                                <img class='img-fluid' src='assets/images/doc-5.jpg' alt='image'
                                    style='height: 92.25px!important;width: 91.99px!important;'>
                            </a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel">
                        <div class="modal-dialog modal-lg" role="document" style="margin-top: 7vw;">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <i class="fa-chevron-left fas fs-60" id="prevBtn"></i>
                                    <img class=" px-5" src="" alt="image" width='600'
                                        height='460'>
                                    <i class="fa-chevron-right fas fs-60" id="nextBtn"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-lg-9 content-area">
                <article class="post ttm-blog-single clearfix">
                    <!-- post-featured-wrapper -->
                    <div class='ttm-post-featured-wrapper'>
                        <div class='ttm-post-featured'>
                            <img class='img-fluid' src='assets/images/doc-5.jpg' alt='blog-post'
                                style='width: 100%;height: 500px;'>
                        </div>
                    </div>
                    <div class='ttm-blog-single-content'>
                        <div class='entry-content'>
                            <div class='ttm-post-entry-header pt-20 pb-15'>
                                <div class='post-meta'>
                                    <span class='ttm-meta-line entry-date'>
                                        <i class='fa fa-calendar'></i>
                                        <time class='entry-date published'>$date</time>
                                    </span>
                                </div>
                            </div>
                            <p id='display'>$description</p>
                            <!-- separator -->
                            <div class="separator">
                                <div class="sep-line mt-25 mb-25"></div>
                            </div>
                            <div class="ttm-blog-classic-box-comment">
                                <div id="comments" class="comments-area">
                                    <h2 class="comments-title">Comments</h2>
                                    <!-- <ul class="comment-list">
                                        <li>
                                            <div class='comment-body'>
                                                <div class='comment-author vcard'>
                                                    <img src='assets/images/doc-5.jpg' class='avatar'
                                                        alt='comment-img'>
                                                </div>
                                                <div class='comment-box'>
                                                    <div class='comment-meta commentmetadata'>
                                                        <cite class='ttm-comment-owner'>$comment_name</cite>
                                                        <a>$date</a>
                                                    </div>
                                                    <div class='author-content-wrap'>
                                                        <p>$fetch_comment</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> -->
                                    <!-- separator -->
                                    <div class="separator">
                                        <div class="sep-line mt-25 mb-25"></div>
                                    </div>

                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">Leave a Comment</h3>
                                        <p class="comment-notes">Your email address will not be published. </p>
                                        <form method="post" id="ttm-comment-form" class="row comment-form clearfix">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <textarea name="comment" rows="5" placeholder="Comments"
                                                        required="required" class="form-control with-border"></textarea>
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
                                                    <input name="email" type="text" placeholder="Email (required)"
                                                        required="required" class="form-control with-border">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="form-group">
                                                    <input name="website" type="text" placeholder="Website"
                                                        required="required" class="form-control with-border">
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
                </article>
                 
        </div><!-- row end -->
    </div>
</div>
 @endsection