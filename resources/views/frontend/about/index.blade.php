@extends('frontend.layouts.app',['active' => 'about'])
@section('content')
    @include('frontend.package.breadcrumb',['title' => 'About Us'])
    
    @include('frontend.home.sponsor')
@endsection
