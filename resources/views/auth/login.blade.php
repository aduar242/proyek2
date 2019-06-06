<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
@include('tittle')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ ('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ ('frontend/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ ('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ ('frontend/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ ('frontend/vendors/lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{ ('frontend/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ ('frontend/vendors/animate-css/animate.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ ('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ ('frontend/css/responsive.css') }}">
</head>

<body>

    <!--================Header Menu Area =================-->
    @include('postings.grup.kepala')
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    @include('postings.grup.bannerLogin')
    <!--================End Home Banner Area =================-->

    <!--================Login Box Area =================-->
    <section class="login_box_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="{{ ('frontend/img/login.jpg')}}" alt="">
                        <div class="hover">
                            <h4>Belum terdaftar sebagai user</h4>
                            <p>Silahkan daftar di bawah sini</p>
                            <a class="main_btn" href="registration.html">Membuat akun baru</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Silahkan login Disini</h3>
                        <form class="row login_form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="email" placeholder="Email" value="{{ old('email')}}">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Tetap Login</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="Masuk" class="btn submit_btn">Masuk</button>
                                <a href="#">Lupa Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->

    <!--================ start footer Area  =================-->
    @include('postings.grup.kaki')
    <!--================ End footer Area  =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ ('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ ('frontend/js/popper.js') }}"></script>
    <script src="{{ ('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ ('frontend/js/stellar.js') }}"></script>
    <script src="{{ ('frontend/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ ('frontend/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ ('frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ ('frontend/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ ('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ ('frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ ('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ ('frontend/js/mail-script.js') }}"></script>
    <script src="{{ ('frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ ('frontend/js/theme.js') }}"></script>
</body>

</html>