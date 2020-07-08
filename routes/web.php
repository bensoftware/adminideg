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
|addinstitut
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/tableau-de-bord', function () {
    return view('index');
});

Route::get('/admin/domaine', function () {
    return view('domaine.domaine');
});


Route::get('/admin/filliere', function () {
    return view('filliere.filliere');
});

;

Route::resource('/admin/institut','InstitutController');
