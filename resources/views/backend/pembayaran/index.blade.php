@extends('backend.layouts.app',['navigation' => 'admin','menuActive' => 'pembayaran'])
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Data pembayaran</h4>
                </div>
            </div>
            <div class="alert alert-success hidden">Bukti pembayaran untuk order #101 sedang di cetak.</div>
            <div class="row">
                <div class="col-md-10">
                    <table class="table">
                        <thead>
                            <th>Order ID</th>
                            <th>Jumlah Tiket</th>
                            <th>Total Bayar</th>
                            <th>Tipe Pembayaran</th>
                            <th>Opsi</th>
                        </thead>
                        <tbody>
                            @for ($i=1; $i <= 250; $i++)
                                <tr>
                                    <td>{{100 + $i}}</td>
                                    <td>{{$i}}</td>
                                    <td>
                                        @php
                                            $paket = $i % 2 == 1 ? 20000 : 35000;
                                        @endphp
                                        {{"Rp. ".number_format($paket * $i,0,'.','.')}}
                                    </td>
                                    <td>{!!$i % 2 == 1 ? '<span class="label label-info">ONLINE</span>' : '<span class="label label-success">OFFLINE</span>'!!}</td>
                                    <td>
                                        <div class="btn-group ">
										  <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Opsi <span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#" onclick="cetakBukti()">Cetak Bukti</a></li>
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
        $(function(){
            $('.table').dataTable();
        });

        function cetakBukti(){
            $('.alert').removeClass('hidden');
        }
    </script>
@endpush
