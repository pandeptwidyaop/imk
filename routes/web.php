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
        'page' => $id
    ];
    return view("frontend.package.book", $data);
});

Route::get('/admin', function(){
    return redirect('/admin/dashboard');
});
Route::get('/admin/dashboard', function(){
    return view('backend.dashboard.index');
});
