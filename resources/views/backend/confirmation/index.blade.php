@extends('backend.layouts.app',['navigation' => 'owner', 'menuActive' => 'confirmation'])
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Data Konfirmasi</h4>
                </div>
            </div>
            <div class="alert alert-success hidden" id="alertApprove">Pembayaran berhasil diterima</div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Bank Tujuan</th>
                                <th>Bukti</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0; $i < 100; $i++)
                                <tr>
                                    <td>{{100+$i}}</td>
                                    <td>
                                        @if ($i % 2 == 0)
                                            <span class="label label-success">Approved</span>
                                        @else
                                            <span class="label label-default">Waiting</span>
                                        @endif
                                    </td>
                                    <td>{{Carbon\Carbon::now()}}</td>
                                    <td>{{$i % 2 == 1 ? 'MANDIRI' : 'BCA'}}</td>
                                    <td><button class="btn btn-primary btn-sm" onclick="showBukti()">Bukti</button></td>
                                    <td>
                                        @if ($i % 2 == 1)
                                            <a href="#" onclick="approve()">approve</a>
                                        @endif
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalBukti" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="">Bukti Pembayaran</h4>
          </div>
          <div class="modal-body">
              <img src="{{url('bukti.jpg')}}" alt="Bukti Transfer" class="img img-responsive">
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
    
@endpush
@push('js')
    <script type="text/javascript">
    $(".table").dataTable();
    function showBukti(){
        $("#modalBukti").modal("show");
    }

    function approve() {
        bootbox.confirm("Apakah anda ingin menerima pembayaran ini ?", function(result){
            if (result) {
                $("#alertApprove").removeClass('hidden');
            }
        });
    }
    </script>
@endpush
