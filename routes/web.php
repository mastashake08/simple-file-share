<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;

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

Route::get('/billing', function (Request $request) {
    return $request->user()->redirectToBillingPortal(route('premium'));
})->middleware(['auth'])->name('billing');

Route::post('/user/subscribe', function (Request $request) {
    $request->user()->newSubscription(
        'default', env('STRIPE_PRICE_ID')
    );
});
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
