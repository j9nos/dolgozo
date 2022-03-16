<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/workers",[WorkerController::class, "showWorkers"]);
Route::get('/search', function () {
    return view('search');
});
Route::get("/search-worker",[WorkerController::class, "showSpecificWorker"]);