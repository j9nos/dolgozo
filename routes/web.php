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
Route::delete("/kick-worker/{worker}", [WorkerController::class, "kickSpecificWorker"])->name("kick");


Route::get('/modify-worker/{worker}', [WorkerController::class, 'openModifyMenu'])->name('modify');
Route::put("/edit-worker/{worker}", [WorkerController::class, "editSpecificWorker"])->name("edit");