<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/product');
});

Route::get('/product', function () {
    return view('product.index');
});
