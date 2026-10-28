<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('coba');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/pengumuman', function () {
    return view('pengumuman');
});

