<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        "tarea",
        "descripcion",
        "fecha_registro",
        "active"
    ];

    public $timestamps = false;
    protected $table = "tasks";


}
