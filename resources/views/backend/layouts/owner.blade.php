<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li  class="{{$menuActive == 'confirmation' ? 'menu-top-active' : ''}}"><a href="{{url('owner/konfirmasi-pembayaran')}}">KONFIRMASI PEMBAYRAN</a></li>
                        <li  class="{{$menuActive == 'laporan' ? 'menu-top-active' : ''}}"><a href="{{url('owner/laporan')}}">LAPORAN</a></li>
                        <li  class="{{$menuActive == 'artikel' ? 'menu-top-active' : ''}}"><a href="{{url('owner/artikel')}}">ARTIKEL</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
