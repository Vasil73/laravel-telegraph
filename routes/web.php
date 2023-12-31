<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name ('home');

Route::get('/form', function () {
    return view('form');
})->name ('form');

Route::post('/form/submit', [\App\Http\Controllers\TextController::class, 'submit'])
    ->name ('contact-form');

Route::get('/form/all/', [\App\Http\Controllers\TextController::class, 'allData'])
    ->name ('form-data');

Route::get('/form/all/{id}', [\App\Http\Controllers\TextController::class, 'show']
)->name ('form-data-one');

Route::get('/form/all/{id}/update', [\App\Http\Controllers\TextController::class, 'update']
)->name ('form-update');

Route::post('/form/all/{id}/update', [\App\Http\Controllers\TextController::class, 'updateSubmit']
)->name ('form-update-submit');

Route::get('/form/all/{id}/delete', [\App\Http\Controllers\TextController::class, 'delete']
)->name ('form-delete');

