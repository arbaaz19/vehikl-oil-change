<?php

use App\Http\Controllers\OilCheckController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OilCheckController::class, 'create']);
Route::post('/check', [OilCheckController::class, 'store']);
Route::get('/result/{id}', [OilCheckController::class, 'show']);
