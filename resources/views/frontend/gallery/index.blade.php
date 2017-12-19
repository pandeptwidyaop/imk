@extends('frontend.layouts.app',['active' => 'gallery'])
@section('content')
    @include('frontend.package.breadcrumb',['title' => 'Our Gallery'])
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="tz-gallery">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/images/img1.jpg')}}">
                                    <img src="{{asset('frontend/images/img1.jpg')}}" >
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/images/post1.jpg')}}">
                                    <img src="{{asset('frontend/images/post1.jpg')}}" alt="Park">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/images/post2.jpg')}}">
                                    <img src="{{asset('frontend/images/post2.jpg')}}" >
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <a class="lightbox" href="{{asset('frontend/images/post3.jpg')}}">
                                    <img src="{{asset('frontend/images/post3.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/images/post4.jpg')}}">
                                    <img src="{{asset('frontend/images/post4.jpg')}}" alt="Coast">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/images/img2.jpg')}}">
                                    <img src="{{asset('frontend/images/img2.jpg')}}" alt="Rails">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.home.sponsor')
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('frontend/plugins/gallery/fluid-gallery.css')}}">
@endpush
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
@endpush
@push('js')
    <script type="text/javascript">
        $(function(){
            baguetteBox.run('.tz-gallery');
        });
    </script>
@endpush
