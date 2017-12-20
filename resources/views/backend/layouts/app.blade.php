<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>E-TIKET TAMAN AYUN TEMPLE</title>
    <link href="{{asset('backend/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet" />
    @stack('css')
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset("frontend/logo.png")}}" />
                </a>
            </div>
            <div class="right-div">
                <a href="{{url("auth/login")}}" class="btn btn-danger pull-right">LOG OUT</a>
            </div>
        </div>
    </div>
    @include("backend.layouts.".$navigation)


    @yield('content')





    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2017 Taman Ayun Temple
                </div>

            </div>
        </div>
    </section>
    <script src="{{asset('backend/js/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.js')}}"></script>
    <script src="{{asset('backend/js/custom.js')}}"></script>
    @stack('script')
    @stack('js')
</body>
</html>
