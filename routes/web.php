<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/Welcome', 'Welcome');
Route::inertia('/MissionVision', 'MissionVision');
Route::inertia('/AboutUs', 'AboutUs');
Route::inertia('/ContactUs', 'ContactUs');
Route::inertia('/KeyBehaviours', 'KeyBehaviours');
Route::inertia('/CoreValues', 'CoreValues');
Route::inertia('/OurTeam', 'OurTeam');
Route::inertia('/SectorOverview', 'SectorOverview');
Route::inertia('/IndigenousRelations', 'IndigenousRelations');
Route::inertia('/ContactUs', 'ContactUs');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
