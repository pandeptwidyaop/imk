@extends('backend.layouts.app',['navigation' => 'admin','menuActive' => 'tiket'])
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Data Tiket</h4>
                </div>

            </div>
            <div class="alert alert-success hidden" id="alertHapus">Tiket berhasil dihapus.</div>
            <div class="alert alert-success hidden" id="success">
                Tiket berhasil di simpan dan akan segera dicetak, nomor order #256 <br>
                Total bayar <strong id="totalBayar">-</strong> dengan jumlah tiket <strong id="totalTiket">-<strong>
            </div>
            <div class="alert alert-success hidden" id="alertScanner">
                Tiket dengan nomor order #46 sedang dalam proses cetak. Status pesanan <strong>ONLINE</strong>
            </div>
            <button type="button"class="btn btn-primary" onclick="createTicket()"><i class="fa fa-ticket"></i> Buat Tiket</button>
            <button type="button"class="btn btn-success" onclick="showScanner()"><i class="fa fa-eye"></i> Scan QR</button>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Tanggal Beli</th>
                                <th>Tanggal Cetak</th>
                                <th>Jumlah Tiket</th>
                                <th>QR Code</th>
                                <th>Status Beli</th>
                                <th>Status Cetak</th>
                                <th>Total Harga</th>
                                <th>Tiket Tipe</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=1; $i <= 250; $i++)
                                <tr>
                                    <td>{{100 + $i}}</td>
                                    <td>{{\Carbon\Carbon::now()->addDays($i)}}</td>
                                    <td>{{\Carbon\Carbon::now()->addDays($i)}}</td>
                                    <td>{{$i}}</td>
                                    <td>{{"sQskmelw".$i}}</td>
                                    <td>{!!$i % 2 == 1 ? '<span class="label label-info">ONLINE</span>' : '<span class="label label-success">OFFLINE</span>'!!}</td>
                                    <td>{!! $i % 2 == 1 ? '<span class="label label-default">BELUM</span>' : '<span class="label label-success">SUDAH</span>'!!}</td>
                                    <td>
                                        @php
                                            $paket = $i % 2 == 1 ? 20000 : 35000;
                                        @endphp
                                        {{"Rp. ".number_format($paket * $i,0,'.','.')}}
                                    </td>
                                    <td>
                                        {{$paket == 35000 ? "WEEKEND" : ""}}
                                    </td>
                                    <td>
                                        <div class="btn-group ">
										  <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Opsi <span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#" onclick="cetakTiket()">Cetak Tiket</a></li>
											<li class="divider"></li>
											<li><a href="#" onclick="hapusTiket()">Hapus Tiket</a></li>
										  </ul>
										</div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="createTicket" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="">Buat Tiket</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="">Ticket</label>
                <select class="form-control" id="paket" onchange="getPrice()">
                    <option value="20000">Senin s/d Kamis</option>
                    <option value="35000">Jumat s/d Minggu</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" placeholder="" min="1" value="1" onchange="getPrice()">
                <p id="total"></p>
              </div>
              <div class="form-group">
                <label for="">Kota Asal</label>
                <select class="form-control" id="country">

                </select>
              </div>
              <div class="form-group">
                <input type="checkbox" checked id="print">
                <label for="print">Segera cetak setelah menyimpan data.</label>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveTicket()">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="scanner" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="">Scan QR</h4>
          </div>
          <div class="modal-body">
              <video id="preview" style="width: 100% !important;height:auto !important;"></video>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endsection
@push('css')
    <link href="{{asset('backend/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
@endpush
@push('script')
    <script src="{{asset('backend/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/js/dataTables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset("frontend/plugins/bootbox.min.js")}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset("backend/js/instascan.min.js")}}"></script>
@endpush
@push('js')
    <script type="text/javascript">
        var option = '';
        var _total = 0;
        $(function(){
            $('.table').dataTable();
            $.getJSON('{{url('countries.json')}}', function(json, textStatus) {
                $.each(json,function(index, el) {
                    option += '<option>'+el.name+'</option>';
                });
                $('#country').append(option);
            });
            getPrice();
        });

        function createTicket(){
            $("#createTicket").modal("show");
        }

        function getPrice(){
            var harga = $("#paket").val();
            var jumlah = $("#jumlah").val();
            _total = harga * jumlah;
            $("#total").text("Total Bayar : Rp. "+addCommas(_total));
        }

        function saveTicket(){
            $("#totalBayar").text("Rp. "+addCommas(_total));
            $("#totalTiket").text($("#jumlah").val());
            $("#success").removeClass('hidden');
        }

        function showScanner(){
            $("#scanner").modal("show");
        }

        function cetakTiket(){
            $("#success").removeClass('hidden');
        }

        function hapusTiket(){
            bootbox.confirm("Apakah anda ingin menghapus tiket ini ?", function(result){
                if (result) {
                    $("#alertHapus").removeClass('hidden');
                }
            });
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
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        $("#scanner").modal("hide");
        console.log(content);
        bootbox.confirm("Tiket dengan nomor order #46 ditemukan. Apakah anda ingin mencetaknya ?", function(result){
            if (result) {
                $("#alertScanner").removeClass('hidden');
            }
        });
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
@endpush
