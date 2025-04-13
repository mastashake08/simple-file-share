<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Models\ShortLink;
use Illuminate\Support\Str;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/save-file', function (Request $request) {
    $request->validate([
        'file' => 'required|file',
    ]);

    $path = $request->file('file')->store('uploads', 'public');

    // make a temporary URL and return
    $url = Storage::temporaryUrl($path, now()->addWeek(1));
    $shortLink = ShortLink::create([
        'short_link' => Str::random(6),
        'url' => $url,
        'path' => $path,
    ]);
    return response()->json(['url' => $shortLink->getLink()], 201);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/subscription-status', function (Request $request) {
        return response()->json([
            'isSubscribed' => $request->user()->subscribed('default'),
        ]);
    });

    Route::post('/billing-portal', function (Request $request) {
        return response()->json([
            'url' => $request->user()->billingPortalUrl(route('premium')),
        ]);
    });

    Route::post('/subscribe', function (Request $request) {
        $request->user()->newSubscription('default', env('STRIPE_PRICE_ID'))->create();
        return response()->json(['message' => 'Subscription successful!']);
    });
});