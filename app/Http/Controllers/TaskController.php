<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function home(){
        $data = Task::select("tarea","id")->get();
        return view("viewTask")->with("data",$data);
    }

    public function create_taskForm(){
        return view("taskForm");
    }

    public function createTask(){

    }
    public function deleteTask(){

    }
    public function updateTask(){

    }
}
