<?php

use Illuminate\Support\Facades\Route;

// Route:: view('/','welcome');

// Route:: view('hello', 'lintang');

// Route:: view('disk/love', 'disk/love');
// // Route::get('/', function () {
// //     return view('welcome');git add
// // });
// Route:: view('disk/love', 'disk/love');
//URL               BLADE 

Route::get('/', function () {
    $name = "Lintang Purnama";
    return view('welcome', ['name' => $name]);
});
