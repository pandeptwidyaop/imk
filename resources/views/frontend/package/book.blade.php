@extends('frontend.layouts.app',['active' => 'package'])
@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    @if ($page == 'prewedding')
                        <h1>Prewedding Photo Shoot in Taman Ayun Temple</h1>
                    @else
                        <h1>Dinner in Taman Ayun Temple</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="heading text-center">
                        <h2>Booking</h2>
                    </div>
                    <section>
                        <div class="row">
                            <div class="alert alert-success hidden" id="alert">Thank you <strong id="notName">-</strong> your payment is inclomplete. We send instruction to your email <strong id="notEmail">-</strong> please complete it.</div>
                            <div class="col-md-6 col-md-offset-3">

                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Personal Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" id="_name" placeholder="">
                                      </div>
                                      <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" id="_email" placeholder="">
                                      </div>
                                      <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                      </div>
                                      <div class="form-group">
                                        <label for="">Country</label>
                                        <select class="form-control" id="country">
                                            <option value="">-</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="number" class="form-control" id="" placeholder="">
                                      </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Booking Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      <div class="form-group">
                                        <label for="">Date Book</label>
                                        <input type="text" class="form-control" id="date" placeholder="" onchange="getPrice()">
                                      </div>
                                      <div class="form-group">
                                        <label for="">How many Person</label>
                                        <input type="number" class="form-control" placeholder="" value="1" min="1" onchange="getPrice()" id="person">
                                        <p class="help-block" id="total">Help text here.</p>
                                      </div>

                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Payment Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      <div class="form-group">
                                        <input type="radio" id="bank" placeholder="" name="payMenthod">
                                        <label for="bank">Bank Transfer</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="radio" id="paypal" placeholder="" name="payMenthod">
                                        <label for="paypal">PayPal</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="radio" id="credit" placeholder="" name="payMenthod">
                                        <label for="credit">Credit Card</label>
                                      </div>
                                  </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-template-main" onclick="bookAlert()">Book</button>
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
@push('css')
    <link rel="stylesheet" href="{{asset('frontend/plugins/date/daterangepicker.css')}}">
@endpush
@push('script')
    <script src="{{asset('frontend/plugins/date/moment.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('frontend/plugins/date/daterangepicker.js')}}" charset="utf-8"></script>
    <script src="{{asset('frontend/plugins/bootbox.min.js')}}" charset="utf-8"></script>
@endpush
@php
    $price = 0;
    if ($menu != null) {
        switch ($menu) {
            case 'balinese':
                $price = 250000;
                break;
            case 'italian':
                $price = 300000;
                break;
            case 'chinese':
                $price = 450000;
                break;
            case 'japanese':
                $price = 450000;
                break;
        }
    }
@endphp
@push('js')

    <script type="text/javascript">
        var option = '';
        var _personPrice = {{$price == 0 ? 50000 : $price}};
        var _dayPrice = 250000;
        var total = 0;
        $(function(){
            $.getJSON('{{url('countries.json')}}', function(json, textStatus) {
                $.each(json,function(index, el) {
                    option += '<option>'+el.name+'</option>';
                });
                $('#country').append(option);
            });

            $('#date').daterangepicker({
                locale: {
                  format: 'YYYY-MM-DD'
                }
            });

            getPrice();
        });

        function bookAlert(){
            bootbox.confirm("Are you sure to book now ?", function(result){
                 if (result) {
                     $('#notEmail').text($("#_email").val());
                     $('#notName').text($("#_name").val());
                     $('#alert').removeClass('hidden');
                 }
             });
        }

        function getRangeDate(){
            data = $('#date').val();
            dataDate = data.split(" - ");
            start = new Date(dataDate[0]);
            end = new Date(dataDate[1]);
            diff = new Date(end - start);
            days = diff/1000/60/60/24;
            return days+1;
        }

        function getPrice(){
            totalDay = getRangeDate() * _dayPrice;
            totalPerson = $('#person').val() * _personPrice;
            @if ($page == 'prewedding')
                total = totalDay + totalPerson;
            @else
                total = totalDay * $('#person').val();
            @endif

            $('#total').text("Total : Rp. "+addCommas(total));
        }

        function addCommas(nStr)
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }

    </script>
@endpush
