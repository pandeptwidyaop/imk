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
Route::get('/admin', function(){
    return redirect('/admin/dashboard');
});
Route::get('/admin/dashboard', function(){
    return view('backend.dashboard.index');
});
