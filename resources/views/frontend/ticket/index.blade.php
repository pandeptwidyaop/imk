@extends('frontend.layouts.app',['active' => 'ticket'])
@section('content')
    <section class="bar background-white no-mb" id="packages">
        <div class="container" data-animate="fadeInUp">
            <div class="row">
                <div class="alert alert-success hidden" id="alert">Thank you <strong id="notName">-</strong> your payment is inclomplete. We send instruction to your email <strong id="notEmail">-</strong> please complete it.</div>
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
                                <a href="javascript:void(0)" class="btn btn-template-main" onclick="bookTicket('Monday to Thursday / Rp. 20.000',20000)">Book now </a>
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
                                <a href="javascript:void(0)" class="btn btn-template-main" onclick="bookTicket('Friday to Sunday / Rp. 35.000',35000)">Book now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modalBook" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title" id="title">Book Ticket</h4>
          </div>
          <div class="modal-body">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Personal Information</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" id="" placeholder="" name="name">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" id="" placeholder="" name="email">
                    </div>
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">Country</label>
                      <select class="form-control" id="country">

                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Phone Number</label>
                      <input type="text" class="form-control" id="" placeholder="" name="phone">
                    </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Ticket Information</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                      <label for="">Number of Tickets</label>
                      <input type="number" class="form-control" id="" placeholder="" min="1" value="2" onkeyup="getPrice(this.value)">
                      <p class="help-block" id="totalPrice">Total : </p>
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
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="showNotify()" data-dismiss="modal">Book</button>
          </div>
        </div>
      </div>
    </div>
@include('frontend.home.sponsor')
@endsection
@push('js')
    <script type="text/javascript">
        var option = '';
        $(function(){
            $.getJSON('{{url('countries.json')}}', function(json, textStatus) {
                $.each(json,function(index, el) {
                    option += '<option>'+el.name+'</option>';
                });
                $('#country').append(option);
            });
        });

        var _price = 0;
        function bookTicket(type,price) {
            _price = price;
            getPrice(2);
            $('#title').text("Book ticket : "+type);
            $('#modalBook').modal('show');
        }

        function getPrice(value) {
            var total = _price * value;
            $('#totalPrice').text('Total : Rp. '+addCommas(total))
        }

        function showNotify(){
            $('#notName').text($('input[name="name"]').val());
            $('#notEmail').text($('input[name="email"]').val());
            $('#alert').removeClass('hidden');
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
