<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

// Vistas 
Route::get("/",[TaskController::class,"home"])->name("task.home");
Route::get("/create-task",[TaskController::class,"create_task"])->name("create.task");
Route::get("/view-task/{id}",[TaskController::class,"view_task"])->name("view.task");
Route::get("/update-task/{id}",[TaskController::class,"update_task"])->name("update.task");
Route::get("/recycle-task",[TaskController::class,"recycle_task"])->name("recycle.task");

// CRUD 
Route::post("/deleteTask", [TaskController::class,"deleteTask"])->name("route.deleteTask");
Route::post("/createTask",[TaskController::class,"createTask"])->name("route.createTask");
Route::post("/updateTask",[TaskController::class,"updateTask"])->name("route.updateTask");
Route::post("/restart-task",[TaskController::class,"restartTask"])->name("route.restartTask");
Route::post("/delete-complete",[TaskController::class,"delete_complete"])->name("route.deleteComplete");