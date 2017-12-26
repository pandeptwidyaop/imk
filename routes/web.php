<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home.index');
});

Route::get('/ticket', function(){
    return view('frontend.ticket.index');
});

Route::get('/special-package/{id}', function($id){
    return view("frontend.package.index",['page' => $id]);
});

Route::get('/special-package/{id}/book', function($id){
    $data = [
        'page' => $id,
        'menu' => null
    ];
    return view("frontend.package.book", $data);
});

Route::get('/special-package/{page}/book/{menu}', function($page,$menu){
    return view("frontend.package.book",['page' => $page,'menu' => $menu]);
});

Route::get('/confirm-payment',function(){
    return view("frontend.payment.index");
});

Route::get('/gallery', function(){
    return view("frontend.gallery.index");
});

Route::get('/about', function(){
    return view("frontend.about.index");
});

Route::get('/loket', function(){
    return redirect('/loket/tiket');
});
Route::get('/loket/tiket', function(){
    return view('backend.tiket.index');
});

Route::get("/loket/pembayaran", function(){
    return view("backend.pembayaran.index");
});

Route::get("/auth/login", function(){
    return view('backend.login.index');
});

Route::get('/owner', function(){
    return redirect('/owner/konfirmasi-pembayaran');
});

Route::get('/owner/laporan', function(){
    return view('backend.laporan.index');
});
Route::get('/owner/laporan/keuangan', function(){
    return view('backend.laporan.keuangan');
});
Route::get('/owner/laporan/pengunjung', function(){
    return view('backend.laporan.pengunjung');
});
Route::get('/owner/artikel', function(){
    return view('backend.artikel.index');
});
Route::get('/owner/review', function(){
    return view('backend.review.index');
});
Route::get('/owner/konfirmasi-pembayaran', function(){
    return view('backend.confirmation.index');
});
