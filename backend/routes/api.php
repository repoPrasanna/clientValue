<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/client', [ClientsController::class, 'index'])->name('client.list');
Route::post('/client', [ClientsController::class, 'store'])->name('client.create');
