<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('get-route', function() {
    return;
});

Route::post('post-route', function() {
    return;
});

Route::put('put-route', function() {
    return;
});

Route::patch('patch-route', function() {
    return;
});

Route::delete('delete-route', function() {
    return;
});

Route::fallback(function() {
    return "Ooops we couldn't find page";
});

