<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get("/",[TaskController::class,"home"])->name("task.home");
Route::get("/formTask",[TaskController::class,"create_taskForm"])->name("task.form");
Route::post("/deleteTask", [TaskController::class,"deleteTask"])->name("route.deleteTask");
Route::post("/createTask",[TaskController::class,"createTask"])->name("route.createTassk");
