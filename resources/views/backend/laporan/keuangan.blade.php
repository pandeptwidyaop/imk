<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Keuangan</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">

    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <table class="table">
                    <thead>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Jumlah Tiket</th>
                        <th>Jumlah Pemasukan</th>
                    </thead>
                    <tbody>
                        @for ($i=1; $i < 200; $i++)
                            <tr>
                                <td>{{date('l', strtotime(Carbon\Carbon::now()->addDays($i)))}}</td>
                                <td>{{date('d F Y', strtotime(Carbon\Carbon::now()->addDays($i)))}}</td>
                                <td>{{600+($i * 2)}}</td>
                                <td>Rp. {{number_format(600+($i * 2)*30000,0,'.','.')}}</td>
                            </tr>
                            @if ($i % 30 == 0)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>TOTAL : Rp. 99.900.000</td>
                                </tr>
                            @endif
                        @endfor
                    </tbody>
                 </table>
             </div>
         </div>
     </div>

    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
