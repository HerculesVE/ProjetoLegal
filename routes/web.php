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
Route::get('/tutoriais', function () {
    return view('site/tutoriais');
})->name('site.tutoriais');

Route::get('/sobre', function () {
    return view('site/sobre');
})->name('site.sobre');

Route::get('/servicos', function () {
    return view('site/servicos');
})->name('site.servicos');

Route::get('/noticias', function () {
    return view('site/noticias');
})->name('site.noticias');

Route::get('/', function () {
    return view('site/home');
})->name('site.home');

Route::get('/faq', function () {
    return view('site/faq');
})->name('site.faq');

Route::get('/eventos', function () {
    return view('site/eventos');
})->name('site.eventos');

Route::get('/estantes', function () {
    return view('site/estantes');
})->name('site.estantes');

Route::get('/cadastro', function () {
    return view('site/cadastro');
})->name('site.cadastro');

