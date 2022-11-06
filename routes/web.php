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
    return view('welcome');
});

Route::get('/users/create', function () {
    return view('.users.create');
});

Route::post('/users/create', function () {
    dump($_REQUEST);
    var_dump($_REQUEST);
    return view('.users.create');
});


Route::get('/users/list', function () {
    return view('.users.list');
});

Route::get('/users/card', function () {
    return view('.users.card');
});

Route::get('/cui', function () {
    return view('.mkutsui.mkutsui');
});



