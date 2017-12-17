@extends('frontend.layouts.app')

@section('content')
    @include('frontend.home.slider')
    @include('frontend.home.post')

    <section class="bar background-image-fixed-3 no-mb color-white text-center">
        <div class="dark-mask"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                    </div>
                    <h3 class="text-uppercase">Do you want to see more?</h3>
                    <p class="lead">We have prepared for you more than 40 different HTML pages, including 5 variations of homepage.</p>
                    <p class="text-center">
                        <a href="index2.html" class="btn btn-template-transparent-black btn-lg">Check other homepage</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.home.review')

    @include('frontend.home.sponsor')

    <div id="get-it">
        <div class="container">
            <div class="col-md-8 col-sm-12">
                <h3>Do you want cool website like this one?</h3>
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="#" class="btn btn-template-transparent-primary">Buy this template now</a>
            </div>
        </div>
    </div>
@endsection
