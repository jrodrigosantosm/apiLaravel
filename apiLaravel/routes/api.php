<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\AuthController;

Route::get('/teste', function () {
    return response()->json([
                'version' => app() -> version(),

            ]
        );
    }
);


Route::post('/novo', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

