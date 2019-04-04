<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Login Admin</title>
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{ asset('admin/login/images/icons/icon3.png') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('tampilan_login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('tampilan_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('tampilan_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('tampilan_login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('tampilan_login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('tampilan_login/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('tampilan_login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('tampilan_login/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('tampilan_login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('tampilan_login/css/main.css') }}">
<!--===============================================================================================-->
</head>

<body>
<center>
<table border="0" class="center">
    <tr>
        <td></td>
    </tr>
    <tr>
        <td>

<div class="limiter">
        <div class="container-login100" style="">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">{{ csrf_field() }}
                    <span class="login100-form-logo"> 
                        <!-- <i class="zmdi zmdi-landscape"></i> -->
                    </span>

                    <span class="p-b-34 p-t-27">
                        <div class="logo">
             <img src="{{asset('admin/login/images/icons/icon.png') }}" class="responsive" height="100" width="auto">
            </div>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                        <input class="input100" type="email" name="email" placeholder="Username/Email" value="{{ old('email') }}" required autofocus>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Kata sandi" required>
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="contact100-form-checkbox">
                        <label class="label-checkbox100" for="ckb1">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                            Ingatkan
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Masuk
                        </button>
                    </div>
                </form>

                    <div class="text-center">
                        <a class="txt1" href="#">
                            Lupa Password..?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
        </td>
    </tr>

</center>
</table>
    
    
<!--===============================================================================================-->
    <script src="{{ asset('tampilan_login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('tampilan_login/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('tampilan_login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('tampilan_login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('tampilan_login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('tampilan_login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('tampilan_login/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('tampilan_login/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{asset('tampilan_login/admin/login/js/main.js') }}"></script>
</body>
</html>
