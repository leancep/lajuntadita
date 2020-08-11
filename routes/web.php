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
    return view('index');
});

Route::get('alerta', function () {
    return view('alerta');
});

Route::resource('inicio', 'PedidosController');
//Route::get('/picadaChica', function () {
  //  return view('picadaChica');
//});
//Route::get('/picadaMediana', function () {
  //  return view('picadaMediana');
//});
//Route::get('/picadaGrande', function () {
 //   return view('picadaGrande');
//});
