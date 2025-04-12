<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('file/{short_link}', function ($short_link) {
    $link = \App\Models\ShortLink::where('short_link', $short_link)->firstOrFail();
    return view('ads', ['shortLink' => $link]);
})->name('file');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
