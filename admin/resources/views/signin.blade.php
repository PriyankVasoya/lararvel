<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Nexa Bootstrap 4 Admin::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
{{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}

<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/authentication.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
</head>


    <body class="theme-orange">
        <div class="authentication">
            <div class="card">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header slideDown">
                                <div class="logo"><img src="assets/images/logo.png" alt="Nexa"></div>
                                <h1>Nexa Admin</h1>
                                {{-- <ul class="list-unstyled l-social">
                                    <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>                            
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                </ul> --}}
                            </div>                        
                        </div>
                        <form class="col-lg-12" id="sign_in" action="/login" method="post">
                            @csrf
                            <h5 class="title">Sign in to your Account</h5>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="email" name="email" class="form-control">
                                    <label class="form-label">Email</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" name="password" class="form-control">
                                    <label class="form-label">Password</label>
                                </div>
                            </div>
                            {{-- <div>
                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan">
                                <label for="rememberme">Remember Me</label>
                            </div>                         --}}
                            @if (session('loginError'))
                            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                                <div class="alert alert-success">
                                  <h3> {{session('loginError')}}</h3>
                                </div>
                            </div>
                          @endif

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-raised btn-primary waves-effect">SIGN IN</button>
                                {{-- <a href="sign-up.html" class="btn btn-raised btn-default waves-effect">SIGN UP</a>                         --}}
                            </div>
                        </form>
                                          
                    </div>
                </div>
            </div>
        </div>
        
     
<!-- Jquery Core Js --> 
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
</body>
</html>
