@extends('frontend.layouts.app',['active' => 'package'])
@section('content')
    @include('frontend.package.'.$page)
    @include('frontend.home.sponsor')
@endsection
