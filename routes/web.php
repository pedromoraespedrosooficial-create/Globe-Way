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

Route::get('/index', function () {
    return view('index');
});
Route::get('/india', function () {
    return view('india');
});
Route::get('/nigeria', function () {
    return view('nigeria');
});
Route::get('/philippines', function () {
    return view('philippines');
});
Route::get('/singapore', function () {
    return view('singapore');
});
Route::get('/travel-diary', function () {
    return view('travel-diary');
});
Route::get('/D_A_R', function () {
    return view('D_A_R');
});


Route::fallback(function(){
    return redirect('/index')->with('msg','Vocêdigitou a rota incorretamente! Redirecionamos para /concessionaria');
});