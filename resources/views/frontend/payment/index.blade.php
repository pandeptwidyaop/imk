@extends('frontend.layouts.app',['active' => 'payment'])
@section('content')
    @include('frontend.package.breadcrumb',['title' => 'Confirmation Payment (Only Bank Transfer)'])
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="heading text-center">
                        <h2>Confirmation Payment</h2>
                    </div>
                    <section>
                        <div class="row">
                            <div class="alert alert-success hidden" id="alert">Your payment successfuly confirmed, we will provide ticket info on your email.</div>
                            <div class="alert alert-danger hidden" id="alertDanger">Your Order ID is invalid.</div>
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                  <label for="">Order ID</label>
                                  <input type="text" class="form-control" id="order_id" placeholder="">
                                  <p class="help-block">Please enter order id in email we sent to you.</p>
                                </div>
                                <div class="form-group">
                                  <label for="">Proof Picture</label>
                                  <input type="file" class="form-control" id="" placeholder="" accept="image/*">
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-template-main" onclick="sendConfirmation()">Submit</button>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@include('frontend.home.sponsor')
@endsection
@push('script')
    <script src="{{asset('frontend/plugins/bootbox.min.js')}}" charset="utf-8"></script>
@endpush
@push('js')
    <script type="text/javascript">
        function sendConfirmation(){
            bootbox.confirm("Are you sure to book now ?", function(result){
                if ($('#order_id').val() == '14045') {
                    console.log("order id");
                    $("#alertDanger").removeClass('hidden');
                }else {
                    $("#alert").removeClass('hidden');
                }
            });
        }
    </script>
@endpush
