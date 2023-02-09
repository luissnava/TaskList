<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function home()
    {
        $data = Task::select("tarea", "id")->where("active", "true")->get();
        return view("viewTask")->with("data", $data);
    }
    public function recycle_task()
    {
        $data = Task::select("tarea", "id", "fecha_registro")->where("active", "false")->get();
        return view("recycleTask")->with("data", $data);
    }
    public function create_task()
    {
        $ruta = "createTask";
        return view("createTask")->with("ruta",$ruta);
    }

    public function view_task($id)
    {
        $data = Task::select("id", "tarea", "descripcion", "fecha_registro", "active")->where("id", $id)->first();
        return view("detailTask")->with("data", $data);
    }

    public function update_task($id){
        $data["data"] = Task::select("id","tarea","descripcion","fecha_registro")->where("id",$id)->first();
        $data["ruta"] = "updateTask";
        return view("updateTask")->with("data",$data);
    }


    public function createTask(Request $request)
    {
        $fecha = date('Y-m-d H:m:s');
        $query = Task::create([
            'tarea' => $request->name,
            'descripcion' => $request->description,
            'fecha_registro' => $fecha,
            'active' => "true"
        ]);

        return response()->json($query,200);
    }

    public function updateTask(Request $request)
    {
        $data = Task::where("id", $request->id)->update([
            "tarea" => $request->name,
            "descripcion" => $request->description
        ]);
        
       return response()->json($data,200);
    }
    public function deleteTask(Request $request)
    {
        $data = Task::where("id",$request->id)->update([
            "active" => "false"
        ]);

        return response()->json($data,200);
    }
    public function restartTask(Request $request)
    {
        $data = Task::where("id",$request->id)->update([
            "active" => "true"
        ]);

        return response()->json($data,200);
    }

    public function delete_complete(){
        $data = Task::where("active", "false")->delete();

        return response()->json($data,200);
    }
    
}
