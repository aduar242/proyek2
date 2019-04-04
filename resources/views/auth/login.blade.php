<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Login Dashboard</title>
<!-- Custom Theme files -->

<link href="{{ asset('login2/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Silahkan login" />
<!--script-->
<script src="{{ asset('login2/js/jquery.min.js') }}"></script>
<script src="{{ asset('login2/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	
<!--script-->

</head>
<body>
	<div class="head">
		<div class="logo">
			<div class="logo-top">
				<img src="{{ asset('login2/images/logo-putih.png') }}" height="60">
				<h1>Login Dashboard</h1>
			</div>
			<div class="logo-bottom">
				
			</div>
		</div>		
		<div class="login">
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><b>Login</b></span></li>
						<div class="clearfix"></div>
					</ul>				  	 
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-top">
								<form method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

									<br>
									<input type="text" class="email"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required autofocus/>
									</br>
									<br>
									<input type="password" class="password" name="password" placeholder="Password" required=""/>
									</br>
                                    <br>		
									<div class="submit">
										<input type="submit" value="Masuk" />
									</div>
                                    </br>
                                </form>
                                <br>
								</br>
									<div class="clear"></div>
									
							</div>
						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="login-top">
								<form>
									<input type="text" class="name active" placeholder="Your Name" required=""/>
									<input type="text" class="email" placeholder="Email" required=""/>
									<input type="password" class="password" placeholder="Password" required=""/>		
								</form>
								<div class="login-bottom">
									<div class="submit">
										<input type="submit" value="SIGN UP"/>
									</div>
									<ul>
										<li><p>Or login with</p></li>
										<li><a href="#"><span class="fb"></span></a></li>
										<li><a href="#"><span class="twit"></span></a></li>
										<li><a href="#"><span class="google"></span></a></li>
									</ul>
									<div class="clear"></div>
								</div>	
							</div>
							
						</div>							
					</div>	
				</div>
			</div>	
		</div>	
		<div class="clear"></div>
	</div>	
</body>
</html>