<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/devenir-benevole', [VolunteerController::class, 'store'])->name('volunteer.store');
