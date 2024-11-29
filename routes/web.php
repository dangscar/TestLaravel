<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function() {
    $title = "Contact Page Dangkotlin";
    $description = "
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum mollitia beatae cupiditate qui odit, impedit
    quibusdam blanditiis sapiente doloremque optio excepturi veniam delectus rem error, eligendi odio dolorem, aut
    molestias?
    ";

    $book = ['Deep work', "Steal like artist", "Branch in git"];

    return view('contact.index', data: ['title' => $title, 'description' => $description, 'books' => $book]);
});

Route::get('/about', function() {
    return view('about.index');
});

Route::get('/app', function() {
    return view('app');
});

