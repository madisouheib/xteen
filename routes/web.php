<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

Route::post('/user-profiles', [UserProfileController::class, 'store'])->name('user-profiles.store');

Route::get('/', function () {
    return view('welcome');
});
