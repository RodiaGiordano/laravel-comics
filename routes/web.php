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

    $config = config('comics.film');
    $footer_img = config('comics.footer_img');
    $footer_link = config('comics.footer_link');



    return view('home', compact("config","footer_img","footer_link"));
})-> name('home');


Route::get('/single', function () {
    $title = 'single';
    $footer_img = config('comics.footer_img');
    $footer_link = config('comics.footer_link');
    return view('single', compact('title',"footer_img","footer_link"));
})-> name('single');

