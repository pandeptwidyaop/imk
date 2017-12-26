@extends('backend.layouts.app',['navigation' => 'owner', 'menuActive' => 'laporan'])
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Laporan Keuangan & Pengunjung</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <span class="input-group-btn">
                        <a class="btn btn-primary" href="{{url('owner/laporan/keuangan')}}" target="_blank">Lihat Laporan</a>
                      </span>
                    </div>
                    <br>
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <span class="input-group-btn">
                        <a class="btn btn-primary" href="{{url('owner/laporan/pengunjung')}}" target="_blank">Lihat Laporan</a>
                      </span>
                    </div>
                    <br>
                    <canvas id="myChart2" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('css')
    <link rel="stylesheet" href="{{asset('frontend/plugins/date/daterangepicker.css')}}">
@endpush
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    <script src="{{asset("frontend/plugins/bootbox.min.js")}}" charset="utf-8"></script>
    <script src="{{asset('frontend/plugins/date/moment.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('frontend/plugins/date/daterangepicker.js')}}" charset="utf-8"></script>
@endpush
@push('js')
<script>
    $('input[type=text]').daterangepicker({
        locale: {
          format: 'YYYY-MM-DD'
        }
    });
    var ctx = document.getElementById("myChart").getContext('2d');
    var ctx2 = document.getElementById("myChart2").getContext('2d')
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Januari 2017", "Februari 2017", "Maret 2017", "April 2017", "Mei 2017", "Juni 2017"],
            datasets: [{
                label: 'Keuangan',
                data: [140000, 150000, 110000, 190000, 199000, 200000],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    var myChart = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ["Januari 2017", "Februari 2017", "Maret 2017", "April 2017", "Mei 2017", "Juni 2017"],
            datasets: [{
                label: 'Pengunjung',
                data: [140000, 150000, 110000, 190000, 199000, 200000],
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
@endpush
