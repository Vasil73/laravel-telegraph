<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name ('home');

Route::get('/about', function () {
    return view('about');
})->name ('about');

Route::get('/contact', function () {
    return view('contact');
})->name ('contact');

Route::post('/contact/submit', [\App\Http\Controllers\TextController::class, 'submit'])->name ('contact-form');

Route::get('/contact/all/', [\App\Http\Controllers\TextController::class, 'allData'])->name ('contact-data');

Route::get('/contact/all/{id}', [\App\Http\Controllers\TextController::class, 'show']
)->name ('contact-data-one');

Route::get('/contact/all/{id}/update', [\App\Http\Controllers\TextController::class, 'update']
)->name ('contact-update');

Route::post('/contact/all/{id}/update', [\App\Http\Controllers\TextController::class, 'updateSubmit']
)->name ('contact-update-submit');

Route::get('/contact/all/{id}/delete', [\App\Http\Controllers\TextController::class, 'delete']
)->name ('contact-delete');

