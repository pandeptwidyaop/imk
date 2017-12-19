@include('frontend.package.breadcrumb',['title' => 'Dinner in Taman Ayun Temple'])
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 clearfix">
                <div class="heading text-center">
                    <h2>Dinner Package</h2>
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
                    <div class="col-md-3">
                            <div class="package ">
                                <div class="package-header">
                                    <h5>Balinese foods</h5>
                                </div>
                                <div class="price">
                                    <div class="price-container">
                                        <h5><span class="currency">Rp. </span>250.000 / person</h5>
                                    </div>
                                </div>
                                <ul>
                                    <li><i class="fa fa-check"></i>300 seat available</li>
                                    <li><i class="fa fa-check"></i>Private Area</li>
                                    <li><i class="fa fa-check"></i>Decoration</li>
                                    <li><i class="fa fa-check"></i>Free Documentation</li>
                                    <li><i class="fa fa-check"></i>Balinese Performance</li>
                                </ul>
                                <a href="{{url('special-package/dinner/book/balinese')}}" class="btn btn-template-main" >Book now </a>
                            </div>
                        </div>
                    <div class="col-md-3">
                                <div class="package ">
                                    <div class="package-header">
                                        <h5>Italian foods</h5>
                                    </div>
                                    <div class="price">
                                        <div class="price-container">
                                            <h5><span class="currency">Rp. </span>300.000 / person</h5>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i>300 seat available</li>
                                        <li><i class="fa fa-check"></i>Private Area</li>
                                        <li><i class="fa fa-check"></i>Decoration</li>
                                        <li><i class="fa fa-check"></i>Free Documentation</li>
                                        <li><i class="fa fa-check"></i>Balinese Performance</li>
                                    </ul>
                                    <a href="{{url('special-package/dinner/book/italian')}}" class="btn btn-template-main" >Book now </a>
                                </div>
                            </div>
                    <div class="col-md-3">
                            <div class="package ">
                                <div class="package-header">
                                    <h5>Chinese Foods</h5>
                                </div>
                                <div class="price">
                                    <div class="price-container">
                                        <h5><span class="currency">Rp. </span>450.000 / person</h5>
                                    </div>
                                </div>
                                <ul>
                                    <li><i class="fa fa-check"></i>300 seat available</li>
                                    <li><i class="fa fa-check"></i>Private Area</li>
                                    <li><i class="fa fa-check"></i>Decoration</li>
                                    <li><i class="fa fa-check"></i>Free Documentation</li>
                                    <li><i class="fa fa-check"></i>Balinese Performance</li>
                                </ul>
                                <a href="{{url('special-package/dinner/book/chinese')}}" class="btn btn-template-main">Book now </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="package ">
                            <div class="package-header">
                                <h5>Japanese foods</h5>
                            </div>
                            <div class="price">
                                <div class="price-container">
                                    <h5><span class="currency">Rp. </span>450.000 / person</h5>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-check"></i>300 seat available</li>
                                <li><i class="fa fa-check"></i>Private Area</li>
                                <li><i class="fa fa-check"></i>Decoration</li>
                                <li><i class="fa fa-check"></i>Free Documentation</li>
                                <li><i class="fa fa-check"></i>Balinese Performance</li>
                            </ul>
                            <a href="{{url('special-package/dinner/book/japanese')}}" class="btn btn-template-main">Book now </a>
                        </div>
                    </div>
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
