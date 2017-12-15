<header>
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
                                    <li><a href="{{url('/special-package/galadinner')}}">Dinner</a></li>
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
