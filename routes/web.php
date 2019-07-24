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
    return view('welcome');
});

Route::get('/rojo/caballo.html', function(){
    return 'HELLO Hellooo';
});

Route::get(
    '/prueba', function(){
        return view('prueba');
});

Route::get(
    '/prueba2', function(){
        $numero = 4;
        $nombre = 'Harold';

    return view('prueba2', ['numero'=>$numero, 'nombre'=>$nombre]);
});

Route::get('/plantilla', function(){
    return view('plantilla');
});

Route::get('/test', function(){
    return view('test');
});