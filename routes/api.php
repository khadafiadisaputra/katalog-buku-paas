<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Support\Facades\Route;

// Endpoint Health Check
Route::get('/health', [BookController::class, 'healthCheck']);

// Resource Endpoints untuk Buku
Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show']);