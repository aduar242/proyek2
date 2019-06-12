<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('tittle')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url ('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{url ('frontend/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{url ('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{url ('frontend/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{url ('frontend/vendors/lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{url ('frontend/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{url ('frontend/vendors/animate-css/animate.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{url ('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{url ('frontend/css/responsive.css') }}">
</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.3&appId=2177009702411565&autoLogAppEvents=1"></script>
    <!--================Header Menu Area =================-->
    @include('postings.grup.kepala')
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    @include('postings.grup.bannerKegiatan')
    <!--================End Home Banner Area =================-->

    <!--================Blog Categorie Area =================-->
    <!-- <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Social Life</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Politics</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Be a part of politics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Food</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Let the food be finished</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <ul class="blog_meta list">
                                    <li>
                                            <i class="lnr lnr-user"> Admin</i>
                                    </li>
                                    <li>
                                            <i class="lnr lnr-calendar-full"> {{ $posting->created_at }}
                                            </i>

                                    </li>
                                    <!-- <li>
                                        <a href="#">1.2M Views
                                            <i class="lnr lnr-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">06 Comments
                                            <i class="lnr lnr-bubble"></i>
                                        </a>
                                    </li> -->
                                </ul>
                                <ul class="social-links">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-behance"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <div class="feature-img">
                                @if (!empty($posting->photo))
                            <img class="img-fluid" width="70%" src="{{ url('uploads/posting') }}/{{$posting->photo}}">
                        @else
                        <img src="{{ url('dist/img/tidak-ada-image.png') }}" alt="{{ $posting->name }}">
                        @endif
                            </div>
                            <p>
                                
                            <h2>{{ $posting->name }}</h2>
                            </p>
                            <p class="excert">
                                {{ $posting->description }}
                            </p>
                        </div>
                        <!-- <div class="col-lg-12">
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                                </div>
                                <div class="col-lg-12 mt-25">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            @if (!empty($prev))
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="{{
                                    route('posting.single',$prev->id) }}/{{ $prev->name }}">
                                        <img class="" src="
                                        {{ url('uploads/posting') }}/{{$prev->photo}}" height="150px" width="auto">
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Kegiatan Sebelumnya</p>
                                    <a href="{{
                                    route('posting.single',$prev->id) }}/{{ $prev->name }}">
                                        <h4>Judul kegiatan : {{ $prev->name }}</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="{{
                                    route('posting.single',$prev->id) }}/{{ $prev->name }}">
                                        <span class="lnr text-white lnr-arrow-left"></span>
                                    </a>
                                </div>
                            </div>
                            @endif
                            @if (!empty($next)) 
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Kegiatan Selanjutnya</p>
                                    <a href="{{
                                    route('posting.single',$next->id) }}/{{ $next->name }}">
                                        <h4>Judul kegiatan : {{ $next->name }}</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="{{
                                    route('posting.single',$next->id) }}/{{ $next->name }}">
                                        <span class="lnr text-white lnr-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="{{
                                    route('posting.single',$next->id) }}/{{ $next->name }}">
                                        <img class="" src="
                                        {{ url('uploads/posting') }}/{{$next->photo}}" height="150px" width="auto">
                                    </a>
                                </div>
                            </div>
                                    @endif
                        </div>
                    </div>
                    <div class="comments-area">
                        <h2>Komentar</h2>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="fb-comments" data-href="{{Request::url()}}" data-width="100%" data-numposts="5"></div>
                                
                            </div>
                        </div>
                        <!-- <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5>
                                            <a href="#">Elsie Cunningham</a>
                                        </h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5>
                                            <a href="#">Annie Stephens</a>
                                        </h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5>
                                            <a href="#">Maria Luna</a>
                                        </h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c5.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5>
                                            <a href="#">Ina Hayes</a>
                                        </h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                    required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn submit_btn">Post Comment</a>
                        </form>
                    </div> -->
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget author_widget">
                            <img class="" src="{{url ('frontend/img/sumitro.png') }}" alt="" height="150px" width="auto">
                            <h4>Sumitro</h4>
                            <p>Pemilik Pd.Sritanjung</p>
                            <div class="social_icon">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-behance"></i>
                                </a>
                            </div>
                            <p>
                            </p>
                            <div class="br"></div>
                        </aside>
                        <!-- <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/post1.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Space The Final Frontier</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/post2.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/post3.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/post4.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside> -->
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Jumlah Kegiatan</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Kegiatan</p>
                                        <p>{{ $hitungposting }}</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <!-- <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Berlangganan Info Kegiatan</h4>
                            <p>
                                Setiap ada kegiatan di kami, kami akan otomatis pemberitahuan di email anda bahwa ada kegiatan baru di perusahaan kami
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                            <div class="br"></div>
                        </aside> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--================ start footer Area  =================-->
    @include('postings.grup.kaki')
    <!--================ End footer Area  =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url ('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{url ('frontend/js/popper.js') }}"></script>
    <script src="{{url ('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{url ('frontend/js/stellar.js') }}"></script>
    <script src="{{url ('frontend/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{url ('frontend/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{url ('frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{url ('frontend/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{url ('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{url ('frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{url ('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{url ('frontend/js/mail-script.js') }}"></script>
    <script src="{{url ('frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{url ('frontend/js/theme.js') }}"></script>
</body>

</html>