<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');



Route::get('/about',function(){
    return view('components.about');

})->name('about');


Route::get('/contact',function(){
    return view('components.contact');

})->name('contact');

Route::get('/service',function(){
    return view('components.service');

})->name('service');
