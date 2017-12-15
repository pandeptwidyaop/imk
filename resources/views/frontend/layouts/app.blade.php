<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taman Ayun Temple</title>
    <meta name="keywords" content="">
    {{-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'> --}}
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.blue.css')}}" rel="stylesheet" id="theme-stylesheet">
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('frontend/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('frontend/img/apple-touch-icon.png')}}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('frontend/img/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/img/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/img/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/img/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('frontend/img/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('frontend/img/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('frontend/img/apple-touch-icon-152x152.png')}}" />

    <link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/owl.theme.css')}}" rel="stylesheet">
</head>

<body>
            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index.html">
                                <img src="{{asset('frontend/logo.png')}}" alt="Taman Ayun" class="hidden-xs hidden-sm">
                                <img src="{{asset('frontend/logo.png')}}" alt="Taman Ayun" class="visible-xs visible-sm"><span class="sr-only">Taman Ayun Temple - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>

                        <div class="navbar-collapse collapse" id="navigation">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a href="{{url('')}}" class="dropdown-toggle">Home</b></a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{url('')}}" class="dropdown-toggle">Ticket</b></a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Special Package <i class="caret"></i></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('/special-package/prewedding')}}">Prewedding</a></li>
                                        <li><a href="{{url('/special-package/galadinner')}}">Galadinner</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="{{url('')}}" class="dropdown-toggle">Confirm Payment</b></a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{url('')}}" class="dropdown-toggle">Galery</b></a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{url('')}}" class="dropdown-toggle">About</b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        @yield('content')





        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <hr>

                    <h4>Join our monthly newsletter</h4>

                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                            <span class="input-group-btn">

                        <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                    </span>

                        </div>
                    </form>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>

                <div class="col-md-3 col-sm-6">

                    <h4>Blog</h4>

                    <div class="blog-entries">
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="{{asset('frontend/img/detailsquare.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="{{asset('frontend/img/detailsquare.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="{{asset('frontend/img/detailsquare.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Very very long blog post name</a></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>

                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>Universal Ltd.</strong>
                        <br>13/25 New Avenue
                        <br>Newtown upon River
                        <br>45Y 73J
                        <br>England
                        <br>
                        <strong>Great Britain</strong>
                    </p>

                    <a href="contact.html" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>



                <div class="col-md-3 col-sm-6">

                    <h4>Photostream</h4>

                    <div class="photostream">
                        <div>
                            <a href="#">
                                <img src="{{asset('frontend/img/detailsquare.jpg')}}" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="{{asset('frontend/img/detailsquare2.jpg')}}" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="{{asset('frontend/img/detailsquare3.jpg')}}" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="{{asset('frontend/img/detailsquare3.jpg')}}" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="{{asset('frontend/img/detailsquare2.jpg')}}" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="{{asset('frontend/img/detailsquare.jpg')}}" class="img-responsive" alt="#">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </footer>


        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2015. Your company / name goes here</p>
                    <p class="pull-right">Template by <a href="https://bootstrapious.com">Bootstrapious</a> & <a href="https://fity.cz">Fity.cz</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('frontend/js/front.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    @stack('script')
    @stack('js')
</body>

</html>
