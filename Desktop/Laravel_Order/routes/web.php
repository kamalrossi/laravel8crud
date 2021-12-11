<?php
Route::get('/', function () {
    return view('welcome');
});

Route::resource('orders', 'App\Http\Controllers\OrderController');