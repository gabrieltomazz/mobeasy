<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendor/css/font-awesome.min.css" >
    <link rel="stylesheet" href="/assets/vendor/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/assets/vendor/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/assets/vendor/css/skin-purple.min.css">
    <link rel="stylesheet" href="/assets/vendor/css/toastr.min.css">
    <link rel="stylesheet" href="/assets/vendor/css/jcrop.min.css" >
    <link rel="stylesheet" href="/assets/vendor/css/select.min.css" >
    <link rel="stylesheet" href="/assets/vendor/css/angular-ui-tree.min.css">
<!--     <link rel="stylesheet" href="/assets/vendor/css/angular-chart.min.css">
 --><!--     <link rel="stylesheet" href="/assets/css/dutils-floating-labels.css" >
 -->


</head>
<body ng-app="app">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                   <!--  <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> -->
                    <img src="assets/img/logo2.png" style="display: block;margin: 0 auto;" alt="logo2" width="55" height="40">
                
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse" >
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li>
                                 <a href="/" role="button" >
                                    Settings</span>
                                </a>
                            </li>
                            <li>
                                 <a href="/" role="button" >
                                    Account</span>
                                </a>
                            </li>
                            <li>
                                 <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}"></script>    
    <script src="/assets/js/menu.js"></script>

    <script src="/assets/vendor/js/angular.js"></script>
    <script src="/assets/vendor/js/angular-sanitize.min.js"></script>
    <script src="/assets/vendor/js/angular-locale_pt-br.js"></script>
    <script src="/assets/vendor/js/ui-bootstrap-tpls.min.js"></script>
    <script src="/assets/vendor/js/ng-file-upload.min.js"></script> 
    <script src="/assets/vendor/js/select.min.js"></script> 
    <script src="/assets/vendor/js/toastr.min.js"></script>
    <script src="/assets/vendor/js/Chart.min.js"></script> 
    <script src="/assets/vendor/js/jcrop.min.js"></script>
    <script src="/assets/js/config.js"></script>
    <script src="/assets/vendor/js/dutils-angular-config.js"></script>
    <script src="/assets/vendor/js/dutils-angular-directives.js"></script> 
    <script src="/assets/vendor/js/dutils-common.js"></script>
    <script src="/assets/vendor/js/jscolor.js"></script> 
    <script src="/assets/vendor/js/imagezoom.js"></script>

    <script src="/assets/vendor/js/angular-ui-tree.min.js"></script>
    <script src="/assets/vendor/js/angular-chart.min.js"></script>
    <!-- Do Projeto -->
    <script src="/assets/js/dashboard/DashboardController.js"></script>



    <!-- Externo -->
     <script src="/assets/vendor/js/jquery.min.js"></script>

</body>
</html>
