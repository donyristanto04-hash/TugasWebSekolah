<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('berandaa');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/pengumuman', function () {
    return view('pengumuman');
});

