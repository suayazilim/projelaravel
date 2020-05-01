<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('data',function ()
{
 return ['mesaj'=>'ugur'];
 });

Route::get('/{urunadi}/{id}',function ($urunadi,$id){
    return "Ürün adı: $urunadi $id";


})->name("urun-detay");


Route::get('/kampanya',function (){
    return redirect()->route('urun-detay',['urunadi'=>'elma','id'=>'4']);
});
