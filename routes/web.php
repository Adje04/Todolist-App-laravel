<?php
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\TodoController::class, 'index']);
Route::post('/', [App\Http\Controllers\TodoController::class, 'store']);
Route::patch('/{todo}', [App\Http\Controllers\TodoController::class, 'update']);
Route::delete('/{todo}', [App\Http\Controllers\TodoController::class, 'destroy']);