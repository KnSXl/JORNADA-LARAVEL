<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rotas e controller interagindo
Route::get('admin/usuarios', [UserController::class, 'index']);
