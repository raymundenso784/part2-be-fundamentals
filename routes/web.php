<?php

use App\Http\Controllers\SampleController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sample', [SampleController::class, 'index']);

Route::get('/todos', [TodoController::class, 'index']);
Route::get('/todos/destroy', [TodoController::class, 'sampleDestroy']);
Route::get('/todos/show', [TodoController::class, 'show']);
Route::get('/todos/insert', [TodoController::class, 'sampleStore']);
Route::get('/todos/update', [TodoController::class, 'update']);
