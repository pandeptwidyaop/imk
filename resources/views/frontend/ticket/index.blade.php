@extends('frontend.layouts.app')
@section('content')
    <section class="bar background-white no-mb" id="packages">
        <div class="container" data-animate="fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Tickets we offer</h2>
                    </div>
                    <div class="row packages">
                        <div class="col-md-6">
                            <div class="package ">
                                <div class="package-header light-gray">
                                    <h5>Monday to Thursday</h5>
                                </div>
                                <div class="price">
                                    <div class="price-container">
                                        <h4><span class="currency">Rp. </span>20.000</h4>
                                        <span class="period">
                                            / person
                                        </span>
                                    </div>
                                </div>
                                <ul>
                                    <li><i class="fa fa-check"></i>100GB Storage</li>
                                    <li><i class="fa fa-check"></i>Own config file</li>
                                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                                    <li><i class="fa fa-times"></i>Auto Backup</li>
                                    <li><i class="fa fa-times"></i>Extended Security</li>
                                </ul>
                                <a href="#" class="btn btn-template-main">Sign Up </a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="package ">
                                <div class="package-header light-gray">
                                    <h5>Friday to Sunday</h5>
                                </div>
                                <div class="price">
                                    <div class="price-container">
                                        <h4><span class="currency">Rp. </span> 35.000</h4>
                                        <span class="period">/ person</span>
                                    </div>
                                </div>
                                <ul>
                                    <li><i class="fa fa-check"></i>100GB Storage</li>
                                    <li><i class="fa fa-check"></i>Own config file</li>
                                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                                    <li><i class="fa fa-times"></i>Auto Backup</li>
                                    <li><i class="fa fa-times"></i>Extended Security</li>
                                </ul>
                                <a href="#" class="btn btn-template-main">Sign Up </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('frontend.home.sponsor')
@endsection
@push('js')

@endpush
