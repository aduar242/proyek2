<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pd.Sritanjung | {{ $posting->name }} </title>
        <link rel="stylesheet" href="{{ url('tampilan_user/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ url('tampilan_user/css/main.css') }}" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        

        <link rel="stylesheet" href="{{ url('tampilan_user/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('tampilan_user/css/style-portfolio.css') }}">
        <link rel="stylesheet" href="{{ url('tampilan_user/css/picto-foundry-food.css') }}">
        <link rel="stylesheet" href="{{ url('tampilan_user/css/jquery-ui.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ url('tampilan_user/css/font-awesome.min.css') }}" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">

                        <a class="navbar-brand" href="#top">Pd. Sritanjung</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    	<ul class="nav navbar-right top-nav">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="color_animation" href="{{ route('posting.web') }}">HOME</a></li>
                            <li><a class="navactive color_animation" href="#top">BERANDA</a></li>
                            <li><a class="color_animation" href="#kegiatan">KEGIATAN</a></li>
                            <li class="dropdown">
                            	<a class="color_animation" href="#" data-toggle="dropdown"><i class="fa fa-user"></i> Admin</a>
                            	<ul class="dropdown-menu">
                            		<img class="thumbnail" style="height:100px; float-right; margin:10px" src="default.jpg">
                            		<li class="nav-item has-treeview">
                            			<a class="nav-link" href="{{ route('home') }}">
                            				<i class="nav-icon fa fa-dashboard">
                            					{{ __('Dashboard') }}
                            				</i>
                            			</a>
                            		</li>
                            		<li class="nav-item has-treeview">
                            			<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            				<i class="nav-icon fa fa-sign-out">
                            					{{ __('Keluar') }}
                            				</i>
                            			</a>
                            			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            				@csrf
                            			</form>
                            		</li>
                            	</ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                	<img src="{{ url('dist/img/logo-putih.png') }}" width="90%" alt="User Image">
                    
                    <h2 class="white second-title">" Best in the city "</h2>
                    <hr>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="kegiatan" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <div class="img-section">
	                    	@if (!empty($posting->photo))
							<img src="{{ url('uploads/posting') }}/{{$posting->photo}}" class="gambar" height="500px" >
						@else
						<img src="{{ url('dist/img/tidak-ada-image.png') }}" alt="{{ $posting->name }}" width="500px" height="500px">
						@endif
                   </div>
                </div>
                <div class="col-md-6">
                    <h1>{{ $posting->name }}</h1>
					<h4>{{$posting->kategoriposting->name}}</h4>
					<h5>Di posting pada tanggal : {{ $posting->updated_at }}</h5>
					
					<p>  </p>
                    <p class="desc-text">{{ $posting->description }} </p>
                </div>
            </div>
        </section>
        
       
        <!-- ============ Social Section  ============= -->
      
        <section class="social_connect">
            <div class="text-content container"> 
                <div class="col-md-6">
                    <span class="social_heading">Sosial Media</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">Kontak</span>
                    <span class="social_info"><a class="color_animation" href="tel:883-335-6524">(123) 123-456-7890</a></span>
                </div>
            </div>
        </section>

        

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Pd.Sritanjung 2019, Edite Theme by <a href="https://fb.com/aduarart">Aduar_art</a></p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Kembali ke <a href="#top">Atas</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Dibuatkan untuk <a href="#" target="_blank">Proyek 2</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="{{ url('tampilan_user/js/jquery-1.10.2.min.js') }}"> </script>
        <script type="text/javascript" src="{{ url('tampilan_user/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('tampilan_user/js/jquery-1.10.2.js') }}"></script>     
        <script type="text/javascript" src="{{ url('tampilan_user/js/jquery.mixitup.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('tampilan_user/js/main.js') }}"></script>

    </body>
</html>