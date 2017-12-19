<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Prewedding Photo Shoot in Taman Ayun Temple</h1>
            </div>

        </div>
    </div>
</div>
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 clearfix">
                <div class="heading text-center">
                    <h2>Prewedding Package</h2>
                </div>
                <section>
                    <div id="text-page">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="{{asset('frontend/images/slide1.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-5">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>

                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-5">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="col-md-7">
                                <img src="{{asset('frontend/images/slide1.jpg')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row packages">
                        <div class="col-md-6 col-md-offset-3 ">
                            <div class="package ">
                                <div class="package-header">
                                    <h5>Prewedding Packages</h5>
                                </div>
                                <div class="price">
                                    <div class="price-container">
                                        <h5><span class="currency">Rp. </span>50.000 / person</h5>
                                        <h5><span class="currency">Rp. </span>250.000 / day</h5>
                                    </div>
                                </div>
                                <ul>
                                    <li><i class="fa fa-check"></i>Welcome Drink</li>
                                    <li><i class="fa fa-check"></i>Rest Room</li>
                                    <li><i class="fa fa-check"></i>Wedding Photo Decoration</li>
                                    {{-- <li><i class="fa fa-check"></i></li>
                                    <li><i class="fa fa-check"></i>Extended Security</li> --}}
                                </ul>
                            </div>
                        </div>





                    </div>
                <div class="text-center">
                    <a href="{{url("special-package/prewedding/book")}}" class="btn btn-template-main">Book Now</a>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
@push('script')

@endpush
@push('js')
    <script type="text/javascript">
        $(function(){
            $('#calendar').calendar();
        });

        function showBook(){
            $("#modalBook").modal('show');
        }
    </script>
@endpush
