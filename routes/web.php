<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, explicabo voluptatem. Cupiditate nemo explicabo, labore atque consequuntur odio! Quaerat explicabo sunt doloribus commodi eligendi ad blanditiis perferendis debitis voluptas iste';
    return view('home', compact('text'));
})->name('home');

Route::get('/page1', function () {
    return view('page1');
})->name('page1');

Route::get('/page2', function () {
    return view('page2');
})->name('page2');
