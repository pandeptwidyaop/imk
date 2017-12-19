@extends('frontend.layouts.app',['active' => 'home'])
@section('content')
    @include('frontend.home.slider')
    @include('frontend.home.post')
    <section class="bar background-image-fixed-3 no-mb color-white text-center">
        <div class="dark-mask"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase">Do you want to see more articles ?</h3>
                    <p class="text-center">
                        <a href="{{url('article')}}" class="btn btn-template-transparent-black btn-lg">Check other articles</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.home.review')
    @include('frontend.home.sponsor')
@endsection
