<?php

use App\Http\Controllers\Api\V2\TaskCompleteController;
use App\Http\Controllers\Api\V2\TaskController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->prefix('v2')->group(function() {
    Route::apiResource('/tasks', TaskController::class);
    Route::patch('/tasks/{task}/complete', TaskCompleteController::class);
});