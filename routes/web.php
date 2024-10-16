<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'users' => User::with('designation', 'department')->get(),
    ]);
});
