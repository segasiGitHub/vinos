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

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/vinas', function () {
    return view('vinas');
});

Route::get('/actividades', function () {
    return view('actividades');
});

Route::get('/investigaciones', function () {
    return view('investigaciones');
});

Route::get('/programa', function () {
    return view('programa');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/equipo', function () {
    return view('equipo');
});
