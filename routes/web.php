<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => inertia('index'))->name('index');

require __DIR__ . '/auth.php';
