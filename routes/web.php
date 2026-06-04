<?php

use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return view('dashboard.welcome');
});

// routes/web.php
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang'); 