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
})-> name('principal');

Route::get('/cliente-servidor', function () {
    return view('about');
})-> name('sobre');

Route::get('/desarrolladores', function () {
    return view('services');
})-> name('serv');

Route::get('/contactanos', function () {
    return view('contact');
})-> name('contacto');

Route::get('/temas', function () {
    return view('layout.layoutemas');
})-> name('layout');

Route::get('/fundamentos-arquitectura', function () {
    return view('sidebar-left');
})-> name('primertema');