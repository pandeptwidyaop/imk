<section>
    <div class="tl-overlay">

    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

          <div class="item active">
            <img src="{{asset("frontend/images/slide5.jpg")}}" alt="Los Angeles" style="width:100%;">
            {{-- <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>LA is always so much fun!</p>
            </div> --}}
          </div>

          <div class="item">
            <img src="{{asset("frontend/images/slide2.jpg")}}" alt="Chicago" style="width:100%;">
          </div>

          <div class="item">
            <img src="{{asset("frontend/images/slide4.jpg")}}" alt="New York" style="width:100%;">
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
</section>
