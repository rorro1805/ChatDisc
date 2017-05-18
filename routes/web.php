<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $msj = 'Hola mundo';
    return view('welcome', ["mensaje" => $msj]);
});

Route::get('/mensajes', function () {
    $msg = new \App\Mensaje();
    $msg->usuario = "rcontreras";
    $msg->texto = "Hola mundo!";
    $msg->fecha = \Carbon\Carbon::now();

    $msg->save();
    $listaMensajes= App\Mensaje::all();

    return view('welcome', ['mensajes' => $listaMensajes]);
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/chat', function (){
    return view('/chat');
});


