<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.home');
});

Route::get('/resume', function () {
    return view('livewire.resume');
});

Route::get('/work', function () {
    return view('livewire.work');
});





Route::get('/download-cv', function () {
    $file = public_path('cv/CV.pdf');
    return response()->file($file);
})->name('download-cv');
