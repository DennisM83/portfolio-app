<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index');

    Route::get('/about', 'about');

    Route::get('/contact', 'contact');
});
