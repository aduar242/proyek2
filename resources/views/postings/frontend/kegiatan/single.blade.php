<html class="no-js" style="display: block;" lang="zxx"><head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('frontend/img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta uu8character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>PD.Sri Tanjung</title>
				<link href="{{asset('frontend/css/fontgoogle.css')}}" rel="stylesheet"> 
				<link href="{{asset('kegiatan/style.css')}}" rel="stylesheet"> 
		
		<!-- Mengelink kan css -->
		
			<link rel="stylesheet" href="{{asset('frontend/css/linearicons.css') }}">
			<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">			
			<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
		
		<!-- Mengelink kan css -->

			  </head><body style="display: block;"><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><header class="header-scrolled" id="header">
		  		<div class="header-top">
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="{{url('frontend.kegiatan')}}"><img src="{{asset('frontend/img/logo.png')}}" alt="" title=""></a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
							  <li class="menu-active"><a href="{{url('frontend.kegiatan')}}">KEGIATAN</a></li>
							  <li class=""><a href="{{url('frontend.krupuk')}}">PRODUK</a></li>
							  <li class=""><a href="{{url('frontend.perusahaan')}}">PD. Sri Tanjung</a></li>
							</ul>
						</nav>

						<!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex justify-content-center align-items-center" style="height: 604px;">
						<div class="banner-content col-lg-10 col-md-12 justify-content-center">
							<h6 class="text-uppercase">Olahan Krupuk Khas Indramayu</h6>
							<h1>Kegiatan PD. Sri Tanjung</h1>
							<p class="text-white mx-auto">Berkualitas Tinggi</p>
							<a href="#" class="primary-btn squire text-uppercase mt-10">Kontak</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<center><p><h1> Kegiatan </h1></p></center>
			<!-- Mulai konten kegiatan -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
						
<!-- bagian contetn -->						<div class="col-lg-10 posts-list">
	
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li><a href="#">Pd.Sri Tanjung</a></li>
										<li><a href="#">Pengolahan</a></li>
										<li><a href="#">Krupuk</a></li>
										<li><a href="#">Khas Indramayu</a></li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><b>{{ Auth::user()->name }}</b></a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6">{{ date("d / m / Y")}}</h5>  <span class="lnr lnr-calendar-full"></span></p>
										
																
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<p>	
									<a class="posts-title"><h3><h1>{{ $kegiatan->title }}</h1></h3></a>
									</p>
									<div class="gambar" align="center">
										<p>
											
										<img src="{{ url('uploadgambar') }}/{{$kegiatan->file_gambar}}" class="gambar" height="300px" >
										</p>
									</div>
									<p class="excert">
										
									<font><h6>
										
										{{ $kegiatan->body }}
									</h6>
									</font>	
									</p>
								</div>
							</div>
							</div>
						
																					
		                    <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item active"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
						</div>
						
					</div>
				</div>	
			</section>
@yield('content')   
			<!-- Selesai konten kegiatan -->
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Tentang Pd. Sritanjung</h6>
								<p>
									If you own an Iphone, you’ve probably already worked out how much fun it is to use it to watch movies-it has that.
								</p>							
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Search Tentang Pd. Sri Tanjung</h6>
								
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="#" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Cari..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari...'" required="" type="email">
			                            	<button class="click-btn"><i class="lnr lnr-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Sosial Media</h6>
								
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									
									
									
								</div>
							</div>
						</div>	
						<div class="col-lg-12">
							<p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright ©<script>document.write(new Date().getFullYear());</script><i aria-hidden="true"></i> by <a target="_blank" href="#">Projek 1 Kelompok 2</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>								
						</div>						
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="{{asset('frontend/js/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>			
			<script type="text/javascript" src="{{asset('frontend/js/mapgoogle.js')}}"></script>
  			<script src="{{asset('frontend/js/easing.min.js')}}"></script>			
			<script src="{{asset('frontend/js/hoverIntent.js')}}"></script>
			<script src="{{asset('frontend/js/superfish.min.js')}}"></script>	
			<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>	
 			<script src="{{asset('frontend/js/jquery-ui.js')}}"></script>			
			<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>						
			<script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>							
			<script src="{{asset('frontend/js/mail-script.js')}}"></script>	
			<script src="{{asset('frontend/js/main.js')}}"></script>	
			
					</body>
				</html>