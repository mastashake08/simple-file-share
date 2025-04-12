<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return response()->json(['url' => $url], 201);
});