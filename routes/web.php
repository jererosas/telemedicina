<?php

use App\Http\Controllers\TwilioTokenController;
use App\Http\Controllers\VideoRoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Livewire\HomeUsers;
use App\Livewire\VideoCall;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('/home', HomeUsers::class)
    ->middleware(['auth', 'verified'])
    ->name('home');
    


    Route::get('/video-call/{roomName}', VideoCall::class)->name('video.call');
require __DIR__.'/auth.php';
