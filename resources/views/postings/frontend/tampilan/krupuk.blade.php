<html class="no-js" style="display: block;" lang="zxx">
<head>
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
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>PD.Sri Tanjung</title>

		<link href="{{asset('css/fontgoogle.css')}}" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">			
			<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
		</head>
		<body style="display: block;" class=""><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>	
			  <header class="" id="header">
		  		<div class="header-top">
		  			
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="{{route('frontend.kegiatan')}}"><img src="{{asset('frontend/img/logo.png')}}" alt="" title=""></a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: auto;">
							  <li class="menu-active"><a href="{{url('frontend.kegiatan')}}">KEGIATAN</a></li>
							  <li class=""><a href="{{url('frontend.krupuk')}}">PRODUK</a></li>
							  <li class=""><a href="{{url('frontend.perusahaan')}}">PD. Sri Tanjung</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->		
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
							<h1>Produk PD. Sri Tanjung</h1>
							<p class="text-white mx-auto">Berkualitas Tinggi</p>
							<a href="#" class="primary-btn squire text-uppercase mt-10">Kontak</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Mulai Menu List -->
			<section class="menu-list-area section-gap">
				<div class="container">

@section('content')
	@if(!empty($kategori))

					<div class="row">
						<div class="menu-cat mx-auto">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<?php foreach ($kategori as $list): ?>
							  <li class="nav-item">
							    <a class="nav-link active show" id="krupuk-udang-tab" data-toggle="pill" href="#krupuk-udang" role="tab" aria-controls="krupuk-udang" aria-selected="true">{{$list->nama_kategori}}</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="krupuk-ikan-tab" data-toggle="pill" href="#krupuk-ikan" role="tab" aria-controls="krupuk-ikan" aria-selected="false">{{$list->nama_kategori}}</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="krupuk-bawang-tab" data-toggle="pill" href="#krupuk-bawang" role="tab" aria-controls="krupuk-bawang" aria-selected="false">{{$list->nama_kategori}}</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="krupuk-jengkol-tab" data-toggle="pill" href="#krupuk-jengkol" role="tab" aria-controls="krupuk-jengkol" aria-selected="false">{{$list->nama_kategori}}</a>
							  </li>
							  <?php endforeach ?>					  
							</ul>							
						</div>

					</div>
				 @else
			<p>Tidak ada Data!</p>
	 	@endif	
					<div id="pills-tabContent" class="tab-content absolute">
						<div class="tab-pane fade active show" id="krupuk-udang" role="tabpanel" aria-labelledby="krupuk-udang-tab">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<a href="#"><h4>Krupuk 1</h4></a>
									<p>
										Usage of the Internet is becoming more common due to rapid advance. Usage of the Internet is becoming more common due to rapid advance.
									</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Harga</h4>
										<span>$15</span>
									</div>
									<div class="s-price col">
										<h4>Berat</h4>
										<span>$20</span>
									</div>
									<div class="s-price col">
										<h4>Ket.</h4>
										<span>$25</span>
									</div>																		
								</div>
							</div>																					
						</div>
						 <div class="tab-pane fade" id="krupuk-ikan" role="tabpanel" aria-labelledby="krupuk-ikan-tab">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<a href="#"><h4>Krupuk 2</h4></a>
									<p>
										Usage of the Internet is becoming more common due to rapid advance. Usage of the Internet is becoming more common due to rapid advance.
									</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Harga</h4>
										<span>$15</span>
									</div>
									<div class="s-price col">
										<h4>Berat</h4>
										<span>$20</span>
									</div>
									<div class="s-price col">
										<h4>Ket.</h4>
										<span>$25</span>
									</div>																		
								</div>
							</div>	
						 </div>
						  <div class="tab-pane fade" id="krupuk-bawang" role="tabpanel" aria-labelledby="krupuk-bawang-tab">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<a href="#"><h4>Krupuk 3</h4></a>
									<p>
										Usage of the Internet is becoming more common due to rapid advance. Usage of the Internet is becoming more common due to rapid advance.
									</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Harga</h4>
										<span>$15</span>
									</div>
									<div class="s-price col">
										<h4>Berat</h4>
										<span>$20</span>
									</div>
									<div class="s-price col">
										<h4>Ket.</h4>
										<span>$25</span>
									</div>																		
								</div>
							</div>				
						  </div>
						  <div class="tab-pane fade" id="krupuk-jengkol" role="tabpanel" aria-labelledby="krupuk-jengkol-tab">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<a href="#"><h4>Krupuk 4</h4></a>
									<p>
										Usage of the Internet is becoming more common due to rapid advance. Usage of the Internet is becoming more common due to rapid advance.
									</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Harga</h4>
										<span>$15</span>
									</div>
									<div class="s-price col">
										<h4>Berat</h4>
										<span>$20</span>
									</div>
									<div class="s-price col">
										<h4>Ket.</h4>
										<span>$25</span>
									</div>																		
								</div>
							</div>				
						  </div>	
					</div>
				</div>	
			</section>
		    <!-- End menu-list Area -->	

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
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>	
						<div class="col-lg-12">
							<p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright ©<script>document.write(new Date().getFullYear());</script>2018201820182018Polindra<i aria-hidden="true"></i> by <a target="_blank" href="#">Projek 1 Kelompok 2</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>								
						</div>						
					</div>
				</div>
			</footer>
				
			<!-- End footer Area -->	

			<script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="{{asset('frontend/js/popper.min.js')}}1" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
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

</div></body></html>
@endsection