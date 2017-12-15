<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

          <div class="item active">
            <img src="{{asset("frontend/images/slide5.jpg")}}" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>LA is always so much fun!</p>
            </div>
          </div>

          <div class="item">
            <img src="{{asset("frontend/images/slide2.jpg")}}" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>

          <div class="item">
            <img src="{{asset("frontend/images/slide4.jpg")}}" alt="New York" style="width:100%;">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>

    </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
    {{-- <div class="home-carousel">

        <div class="dark-mask"></div>

        <div class="container">
            <div class="homepage owl-carousel">
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5 right">
                            <p>
                                <img src="{{asset('frontend/img/logo.png')}}" alt="">
                            </p>
                            <h1>Multipurpose responsive theme</h1>
                            <p>Business. Corporate. Agency.
                                <br />Portfolio. Blog. E-commerce.</p>
                        </div>
                        <div class="col-sm-7">
                            <img class="img-responsive" src="{{asset('frontend/images/wonderful.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}
</section>
